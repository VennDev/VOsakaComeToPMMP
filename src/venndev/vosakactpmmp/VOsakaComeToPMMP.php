<?php

declare(strict_types=1);

namespace vosaka\vosakactpmmp;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\ClosureTask;
use venndev\vosaka\VOsaka;

final class VOsakaComeToPMMP {

    private static bool $initialized = false;

    public static function init(PluginBase $pl): void
    {
        if (self::$initialized) {
            return;
        }

        self::$initialized = true;

        VOsaka::setEnableMaximumPeriod(true);
        VOsaka::setMaximumPeriod(1);

        $pl->getScheduler()->scheduleRepeatingTask(
            new ClosureTask(fn() => VOsaka::run()), 1);
    }
}