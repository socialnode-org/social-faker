# social-faker
a mock gnu/social server for testing federation APIs.

**In active development, not all api endpoints are implemented yet.**

## Install
``` bash
$ git clone https://github.com/socialnode-org/social-faker.git
```

``` bash
$ composer install
```

``` bash
$ cp .env.example .env && php artisan key:generate
```

Edit .env, add database credentials, ect

``` bash
$ php artisan migrate
```

``` bash
$ php artisan dev:generate
```

Open up your browser and navigate to /api/statuses/public_timeline.json