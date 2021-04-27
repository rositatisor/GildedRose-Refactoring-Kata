<?php

declare(strict_types=1);

namespace Inventory\Normal;

class Normal
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

    public static function create($item): void
    {
        if ($item->quality === 1 || ($item->sell_in > 0 && $item->quality > 0)) {
            --$item->quality;
        }
        if ($item->sell_in <= 0 && $item->quality > 1) {
            $item->quality -= 2;
        }
    }
}
