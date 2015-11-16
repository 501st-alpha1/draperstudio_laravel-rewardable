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

use PackageBackup\Database\Models\Model;

class Badge extends Model
{
    protected $dates = ['awarded_at', 'revoked_at'];

    public function badgeable()
    {
        return $this->morphTo();
    }

    public function requirementType()
    {
        return $this->belongsTo(CreditType::class, 'requirement_type_id');
    }
}
