<?php declare(strict_types=1);

namespace App\Enums;

use ReflectionClass;

class AbstractEnum
{
    public static function getConstants(): array
    {
        return(new ReflectionClass(static::class))->getConstants();
    }

}
