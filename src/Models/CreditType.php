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

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use PackageBackup\Database\Models\Eloquent\Model;

class CreditType extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = ['build_from' => 'name'];

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
