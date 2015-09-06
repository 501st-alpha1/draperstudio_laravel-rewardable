<?php

/*
 * This file is part of Laravel Rewardable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Rewardable\Contracts;

interface Rankable
{
    public function ranks();
    public function getRankPivot($id);
    public function getRanksPivot($type = null);
    public function grantRank($rank);
    public function grantRanks($ranks);
    public function revokeRank($rank);
    public function revokeRanks($ranks);
    public function revokeAllRanks();
    public function reGrantRanks($ranks);
}
