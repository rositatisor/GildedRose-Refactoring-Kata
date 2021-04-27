<?php

declare(strict_types=1);

namespace Inventory\Backstage;

class Backstage
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
        if ($item->quality < 50) {
            ++$item->quality;
            if ($item->sell_in > 5 && $item->sell_in <= 10) {
                ++$item->quality;
            } elseif ($item->sell_in <= 5 && $item->sell_in > 0) {
                $item->quality += 2;
            }
        }
        if ($item->quality > 50 && $item->sell_in > 0) {
            $item->quality = 50;
        } elseif ($item->sell_in <= 0) {
            $item->quality = 0;
        }
    }
}
