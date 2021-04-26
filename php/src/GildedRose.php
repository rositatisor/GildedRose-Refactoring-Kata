<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]  array of created Item class products
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {

            if ($item->name == 'Sulfuras, Hand of Ragnaros') continue;
            
            if ($this->isTheOlderTheBetter($item)) {
                if ($item->quality < 50) {
                    ++$item->quality;
                    
                    if ($item->name == 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->sell_in > 5 && $item->sell_in <= 10) $item->quality += 1;
                        else if ($item->sell_in <= 5 && $item->sell_in > 0) $item->quality += 2;
                    } else {
                        if ($item->sell_in <= 0) ++$item->quality;
                    }
                }
                if ($item->quality > 50 && $item->sell_in > 0) $item->quality = 50;
                else if ($item->sell_in <= 0 && $item->name == 'Backstage passes to a TAFKAL80ETC concert') $item->quality = 0;

            } else {
                if ($item->sell_in > 0 && $item->quality > 0) --$item->quality;
                if ($item->sell_in <= 0 && $item->quality > 1) $item->quality -= 2;
                else if ($item->sell_in <= 0 && $item->quality == 1) --$item->quality;
            }

            if ($item->name !== 'Sulfuras, Hand of Ragnaros') --$item->sell_in;
        }
    }

    public function isTheOlderTheBetter($item)
    {
        $reverse = ['Aged Brie', 'Backstage passes to a TAFKAL80ETC concert'];
        $result = in_array($item->name, $reverse) ? true : false;

        return $result;
    }
}
