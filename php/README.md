![Products](https://img.shields.io/badge/PHP-kata-blue)

# GildedRose refactoring kata solution

**Description:** Fork the [GildedRose-Refactoring-Kata](https://github.com/emilybache/GildedRose-Refactoring-Kata/tree/main/php) repository and follow its instructions.
Task is provided by Kilo Academy team to access the technical skills.

## Structure

- `src` - contains the two classes:
  - `Item.php` - this class is not changed.
  - `GildedRose.php` - refactored class with new feature.
  - `inc` - new folder added with new static classes needed for refactoring:
    - `Backstage.php`- class handling Items, named 'Backstage passes to a TAFKAL80ETC concert';
    - `Brie.php` - class handling Items, named 'Aged Brie';
    - `Sulfuras.php` - class handling Items, named 'Sulfuras, Hand of Ragnaros';
    - `Conjured.php` - class handling Items named 'Conjured Mana Cake' and implementing\* new feature;
    - `Normal.php` - class handling remaining Items.
- `tests` - contains the tests:
  - `GildedRoseTest.php` - starter test.
  - `ApprovalTest.php` - alternative approval test (set to 30 days).
- `fixture`
  - `texttest_fixture.php` used by the approval test, or can be run from the command line.

## Requirements

Gilded Rose Requirements are specified following [this link](https://github.com/emilybache/GildedRose-Refactoring-Kata/blob/main/GildedRoseRequirements.txt).

## Results

To run already written unit tests, from the root of the PHP project run:

```
$ composer test
```

## New feature implementation

As to the requirements "Conjured" items should degrade in Quality twice as fast as normal items.

\*At this base of the code the new feature is not implemented regarding failing the ApprovalTest, however the new feature of "Conjured" items can be easily accessed by uncommenting the `$decreaseSpeed` varianble in Conjured Class.

## Author

[Rosita](https://github.com/rositatisor)
