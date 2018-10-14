# Kint Debugger
## Kint debugging plugin for Craft CMS 3.x

[Kint](https://kint-php.github.io/kint/) is a powerful debugging tool for [PHP](http://www.php.net/). This plugin enables you to use Kint in your [Twig](https://twig.symfony.com/) templates in [Craft CMS](https://craftcms.com/).

## Usage

Using Kint in your Twig templates couldn't be simpler:

```twig
{{ d(craft) }}
{{ d() }}
```

## Requirements

This plugin requires Craft CMS 3.0 or later.

## Installation with Composer

Install the plugin by running:

```console
foo@bar:~$ composer require agencyleroy/craft-kint
```