<?php

namespace Inventory\Sulfuras;

class Sulfuras
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
    }
}