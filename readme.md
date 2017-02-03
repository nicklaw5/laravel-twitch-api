# Twitch RESTful API for Laravel

An easy-to-use RESTful API for Laravel 5

## Supported API Versions

This package supports both v3 and v5 of the Twitch API, and defaults to using v5.

## Installation

```bash
composer require zarlach/laravel-twitch-api
```

In `config/app.php`, add this provider in `providers`

```php
Zarlach\TwitchApi\Providers\TwitchApiServiceProvider::class,
```

Add this facade in `aliases`

```php
'TwitchApi' => Zarlach\TwitchApi\Facades\TwitchApiServiceFacade::class,
```

Publish config, then configure your `config/twitch-api.php`

```php
php artisan vendor:publish
```

## Laravel environment variables

It's recommended to add these variables in your `.env` file.

```bash
TWITCH_KEY=
TWITCH_SECRET=
TWITCH_REDIRECT_URI=
TWITCH_API_VERSION=
```

## Documentation

You'll find documentation markdown files in the `docs` folder.

## Changelog

A list of changes is found in `changelog.md`
