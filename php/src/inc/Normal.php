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

    /**
     * @var int
     */
    public static $max = 50;

    /**
     * @var int
     */
    public static $min = 0;

    /**
     * @var int
     */
    public static $concert = 0;

    /**
     * @var int
     */
    public static $decreaseSpeed = 1;

    public function __construct($item)
    {
        self::$name = $item->name;
        self::$sell_in = $item->sell_in;
        self::$quality = $item->quality;
        self::update($item);
    }

    public static function update($item): void
    {
        self::decrease($item, self::$decreaseSpeed);
    }

    public static function increaseOrStay($item): void
    {
        if ($item->quality < self::$max) {
            ++$item->quality;
        } else {
            $item->quality = self::$max;
        }
    }

    public static function decrease($item, $decreaseSpeed): void
    {
        if ($item->quality > 1) {
            if ($item->sell_in > self::$concert) {
                $item->quality -= 1 * $decreaseSpeed;
            } elseif ($item !== 1) {
                $item->quality -= 2 * $decreaseSpeed;
            }
        } elseif ($item->quality === 1) {
            --$item->quality;
        }
        --$item->sell_in;
    }
}
