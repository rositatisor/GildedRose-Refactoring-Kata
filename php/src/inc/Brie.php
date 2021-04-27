<?php

namespace Inventory\Brie;

class Brie
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
    
    public static function create($item)
    {
        if ($item->quality < 50) ++$item->quality;
        if ($item->quality >= 50) $item->quality = 50;
        else if ($item->sell_in <= 0) ++$item->quality;
    }
}