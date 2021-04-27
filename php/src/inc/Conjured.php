<?php

declare(strict_types=1);

namespace Inventory\Conjured;

use Inventory\Normal\Normal;

class Conjured extends Normal
{
    // /**
    //  * @var int
    //  */
    // public static $decreaseSpeed = 2;

    public static function update($item): void
    {
        self::decrease($item, self::$decreaseSpeed);
    }
}
