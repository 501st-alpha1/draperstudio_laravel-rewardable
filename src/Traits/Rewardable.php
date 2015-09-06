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

trait Rewardable
{
    use Rankable;
    use Creditable;
    use Badgeable;
    use Transactionable;
}
