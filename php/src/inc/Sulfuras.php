<?php

declare(strict_types=1);

namespace Inventory\Sulfuras;

class Sulfuras
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

    public static function create(): void
    {
    }
}
