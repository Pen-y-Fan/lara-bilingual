# Laravel bilingual

Experiments with
the [Filament Translatable Plugin](https://filamentphp.com/docs/2.x/spatie-laravel-translatable-plugin/installation)
using [Filament](https://filamentphp.com/).

## Install

Basic installation instructions

1. Clone the repo

```bash
git clone git@github.com:Pen-y-Fan/lara-bilingual.git
```

2. setup `.env` (remember to crate your database)
2. generate key `php artisan key:generate`
3. Run `php artisan migrate --seed`
4. open the project in browser, add /admin and login
    1. email `admin@example.com`
    2. password `password`

You can switch locales between **English** and **Welsh**, Welsh fake text is latin.

## Tests

Run PHP Unit tests:

```shell
composer tests
```

View the tests: Tests/Feature/Models/**NewsItemTest.php** for examples on how to programmatically add and update
bilingual text.

## Credits

- [Michael Pritchard (AKA Pen-y-Fan)](https://pen-y-fan.github.io/).
- [bezhanSalleh](https://github.com/bezhanSalleh/filament-translatable-plugin-showcase) - Post model from showcase
- [spatie.be/laravel-translatable](https://spatie.be/docs/laravel-translatable/v6/introduction) - NewsItem model from
  docs

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
