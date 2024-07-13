<?php

namespace App\Pattern\Singleton;

class Logger
{
    private static ?Logger $logger = null;

    private static int $countInstances = 0;

    private function __construct()
    {}
    public static function getInstance(): Logger{

        if(self::$logger == null){
            self::$countInstances++;
            self::$logger = new Logger();
        }

        return self::$logger;
    }

    public static function getCount(): int
    {
        return self::$countInstances;

    }

}