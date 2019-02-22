# Spoiler BBCode

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/kvothe/spoiler-bbcode.svg)](https://packagist.org/packages/kvothe/spoiler-bbcode)

A [Flarum](http://flarum.org) extension. Adds a [Spoiler] BBCode.

### Instructions
Wrap the text or elements you want to hide with the Spoiler BBCode:

```
[SPOILER]Your Text.[/SPOILER]
```

To change the text of the spoiler warning use [Flagrow Linguist](https://github.com/flagrow/linguist).

### Screenshot
![Imgur](https://i.imgur.com/SFT5vxZ.gif)

### Installation

Use [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) or install manually with composer:

```sh
composer require kvothe/spoiler-bbcode
```

### Updating

```sh
composer update kvothe/spoiler-bbcode
php flarum cache:clear
```

### Links

- [Packagist](https://packagist.org/packages/kvothe/spoiler-bbcode)
- [GitHub](https://github.com/oaklinq/flarum-ext-spoiler-bbcode)
