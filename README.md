# rasmiphize for PHP

Convert arabic strings to their rasm. This includes:

* Removing diacritics
* Removing vocalization marks

**Text with diacritics and vocalization marks etc**
![First sura of the Qur'an with diacritics and vocalization marks etc](assets/quranic_text_with_diacritics.png)

**Text without diacritics (rasm)**
![First sura of the Qur'an rasmified](assets/quranic_text_rasmifized.png)

## rasmiphize vs. rasmify

`rasmifize` is the successor to [rasmify](https://github.com/telota/rasmify/). I developed `rasmify` with the team of Corpus Coranicum at the Berlin-Brandenburg Academy of Sciences and Humanities.

Since I want to maintain this *rasm* library, I have decided to publish a successor under my own name.

## Install

```
composer require suchmaske/rasmiphize
```

## How to use

### OOP

```php
// Imports
use Rasmiphize\Rasmiphize;
use Rasmiphize\ReplacementRules;

// Code
$arabicString = 'الفَاتِحَة';

$replacementRules = new ReplacementRules();
$rasmiphize = new Rasmiphize($replacementRules);
$rasmiphize->toRasm($arabicString); // الڡاٮحه
```

### Static

```php
// Imports
use Rasmiphize\Rasmiphize;

// Code
$arabicString = 'الفَاتِحَة';
Rasmiphize::rasmiphize($arabicString); // الڡاٮحه
```