[![Total Downloads](https://poser.pugx.org/brosua/enums/d/total)](https://packagist.org/packages/brosua/enums)
[![Monthly Downloads](https://poser.pugx.org/brosua/enums/d/monthly)](https://packagist.org/packages/brosua/enums)

# Enums

## Installation
Install this extension via `composer req brosua/enums`.

## Concept
This package provides helpers for PHP enums. It is designed with a special focus on TYPO3 projects.

|                  | URL                                                       |
|------------------|-----------------------------------------------------------|
| **Repository:**  | https://github.com/brosua/enums/                          |

## Usage

Simply apply the needed trait on your enum.

- [`EnumHelperTYPO3`](#enumhelpertypo3)
- [`Translation`](#translation)
- [`Options`](#options)
- [`TcaOptions`](#tcaoptions)
- [`From`](#from)

### EnumHelperTYPO3

EnumHelperTYPO3 includes all available traits.


```php
use Brosua\Enums\EnumHelperTYPO3;

enum MyEnum: int
{
    use EnumHelperTYPO3;

    case One = 1;
    case Two = 1;

    protected static function getLanguageFilePath(): string
    {
        return 'LLL:EXT:my_extension/Resources/Private/Language/locallang.xlf:myEnum.';
    }
}
```

Now you can use all functions described for the following traits.

### Translation

```php
use Brosua\Enums\Translation;

enum MyEnum: int
{
    use Translation;

    case One = 1;
    case Two = 1;

    protected static function getLanguageFilePath(): string
    {
        return 'LLL:EXT:my_extension/Resources/Private/Language/locallang.xlf:myEnum.';
    }
}
```

Now you can use the following functions:
```php
MyEnum::One->getLabel() // => 'translation1'
MyEnum::One->getTranslationString() // => 'LLL:EXT:my_extension/Resources/Private/Language/locallang.xlf:myEnum.One'
```

### Options

```php
use Brosua\Enums\Options;

enum MyEnum: int
{
    use Options;

    case One = 1;
    case Two = 1;
}
```

Now you can use the following functions:
```php
MyEnum::getOptions() // => [1 => 'translation1', 2 => 'translation2']
```

### TcaOptions

```php
use Brosua\Enums\TcaOptions;

enum MyEnum: int
{
    use TcaOptions;

    case One = 1;
    case Two = 1;

    protected static function getLanguageFilePath(): string
    {
        return 'LLL:EXT:my_extension/Resources/Private/Language/locallang.xlf:myEnum.';
    }
}
```

Now you can use the following functions:
```php
MyEnum::getTcaOptions() // => [['translation1', 1], ['translation2', 2]]
```

### From

```php
use Brosua\Enums\From;

enum MyEnum: int
{
    use From;

    case One = 1;
    case Two = 1;
}
```

Now you can use the following functions:
```php
MyEnum::fromName('One') // => Enum instance One
```
