<?php
/**
 * Application initialization
 */

use gcf\Environment;

include __DIR__ . "/vendor/autoload.php";

try {
        $env = Environment::getInstance("myapp");
} catch (Exception $ex) {
        die($ex->getMessage());
}
