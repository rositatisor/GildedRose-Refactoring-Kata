<?php

declare(strict_types=1);

namespace Inventory\Brie;

use Inventory\Normal\Normal;

class Brie extends Normal
{
    /**
     * @var string
     */
    public static $name;

    /**
     * @var int
     */
    public static $sell_in;

    /**
     * @var int
     */
    public static $quality;

    public function __construct($item)
    {
        self::$name = $item->name;
        self::$sell_in = $item->sell_in;
        self::$quality = $item->quality;
    }

    public static function update($item): void
    {
        self::increaseOrStay($item);
        if ($item->sell_in <= 0 && $item->quality < self::$max) {
            ++$item->quality;
        }
        --$item->sell_in;
    }
}
