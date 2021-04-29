<?php

declare(strict_types=1);

namespace Inventory\Backstage;

use Inventory\Normal\Normal;

class Backstage extends Normal
{
    public static function update($item): void
    {
        self::increaseOrStay($item);
        
        if ($item->sell_in <= self::$concert) {
            $item->quality = self::$min;
        } elseif ($item->quality < self::$max) {
            self::additionalIncrease($item);
        }
        --$item->sell_in;
    }

    public static function additionalIncrease($item): void
    {
        if ($item->sell_in > 5 && $item->sell_in <= 10) {
            ++$item->quality;
        } elseif ($item->sell_in <= 5) {
            $item->quality += 2;
        }
    }
}
