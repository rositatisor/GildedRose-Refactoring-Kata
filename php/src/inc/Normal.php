<?php

namespace Inventory\Normal;

class Normal
{
    /**
     * @var string
     */
    private static $name;

    /**
     * @var int
     */
    private static $sell_in;

    /**
     * @var int
     */
    private static $quality;

    public function __construct($item)
    {
        self::$name = $item->name;
        self::$sell_in = $item->sell_in;
        self::$quality = $item->quality;

        self::qualityDecrease();
    }

    public static function qualityDecrease()
    {
        if (self::$quality == 1 || (self::$sell_in > 0 && self::$quality > 0)) --self::$quality;
        if (self::$sell_in <= 0 && self::$quality > 1) self::$quality -= 2;
    }
}