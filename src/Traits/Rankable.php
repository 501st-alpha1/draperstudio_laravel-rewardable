<?php

/*
 * This file is part of Laravel Rewardable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Rewardable\Traits;

use PackageBackup\Rewardable\Models\Rank;
use PackageBackup\Rewardable\Repositories\RankRepository;

trait Rankable
{
    public function ranks()
    {
        return $this->morphToMany(Rank::class, 'rankable', 'ranks_awarded');
    }

    public function getRankPivot($id)
    {
        return $this->getRankRepository()->getRankPivot($id);
    }

    public function getRanksPivot($type = null)
    {
        return $this->getRankRepository()->reGrantRanks($type);
    }

    public function grantRank($rank)
    {
        return $this->getRankRepository()->grantRank($ranks);
    }

    public function grantRanks($ranks)
    {
        return $this->getRankRepository()->grantRanks($ranks);
    }

    public function revokeRank($rank)
    {
        return $this->getRankRepository()->revokeRank($ranks);
    }

    public function revokeRanks($ranks)
    {
        return $this->getRankRepository()->revokeRanks($ranks);
    }

    public function revokeAllRanks()
    {
        return $this->getRankRepository()->revokeAllRanks();
    }

    public function reGrantRanks($ranks)
    {
        return $this->getRankRepository()->reGrantRanks($ranks);
    }

    private function getRankRepository()
    {
        return new RankRepository($this);
    }
}
