<?php

namespace app;

use gcf\ConfiguratorBase;
use Laminas\Log\Logger;

final class Configurator extends ConfiguratorBase
{
    public static function getLogger(?string $loggerName = null) : ?Logger
    {
        return self::getInstance()->getLoggerObject($loggerName);
    }
}