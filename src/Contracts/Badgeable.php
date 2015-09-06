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

interface Badgeable
{
    public function badges();
    public function getBadgePivot($id);
    public function getBadgesPivot($type = null);
    public function grantBadge($badge);
    public function grantBadges($badges);
    public function revokeBadge($badge);
    public function revokeBadges($badges);
    public function revokeAllBadges();
    public function reGrantBadges($badges);
}
