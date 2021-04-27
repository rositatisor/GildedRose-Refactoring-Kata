<?php

declare(strict_types=1);

namespace GildedRose;

use Inventory\Backstage\Backstage;
use Inventory\Brie\Brie;
use Inventory\Conjured\Conjured;
use Inventory\Normal\Normal;
use Inventory\Sulfuras\Sulfuras;

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
            switch ($item->name) {
                case 'Sulfuras, Hand of Ragnaros':
                    new Sulfuras($item);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    Backstage::update($item);
                    break;
                case 'Aged Brie':
                    Brie::update($item);
                    break;
                case 'Conjured Mana Cake':
                    Conjured::update($item);
                    break;
                default:
                    Normal::update($item);
            }
        }
    }
}
