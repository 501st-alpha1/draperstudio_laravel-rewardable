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

use PackageBackup\Rewardable\Repositories\LeaderboardRepository;
use PackageBackup\Database\Models\Model;

class Leaderboard extends Model
{
    protected $table = 'leaderboard';

    public function boardable()
    {
        return $this->morphTo();
    }

    public function getHighToLow()
    {
        return $this->orderBy('position', 'asc')->get();
    }

    public function getLowToHigh()
    {
        return $this->orderBy('position', 'desc')->get();
    }

    public function createOrUpdate($model)
    {
        return $this->getLeaderboardRepository()->createOrUpdate($model);
    }

    private function calculateExperience($model)
    {
        return $this->getLeaderboardRepository()->calculateExperience($model);
    }

    private function calculatePositions()
    {
        return $this->getLeaderboardRepository()->calculatePositions();
    }

    private function getLeaderboardRepository()
    {
        return new LeaderboardRepository($this);
    }
}
