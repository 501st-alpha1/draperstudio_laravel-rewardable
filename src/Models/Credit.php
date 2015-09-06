<?php

/*
 * This file is part of Laravel Rewardable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Rewardable\Models;

use PackageBackup\Database\Models\Eloquent\Model;
use PackageBackup\Rewardable\Repositories\CreditRepository;

class Credit extends Model
{
    protected $dates = ['awarded_at', 'revoked_at'];

    protected $casts = ['meta' => 'array'];

    public function creditable()
    {
        return $this->morphTo();
    }

    public function type()
    {
        return $this->belongsTo(CreditType::class, 'credit_type_id');
    }

    public function scopeWhereType($query, $type)
    {
        return $query->join('credit_types', 'credits.credit_type_id', '=', 'credit_types.id')
                     ->where('credit_types.name', $type)
                     ->select('credits.*');
    }

    public function getPivot()
    {
        return (new CreditRepository($this))->getPivot();
    }
}
