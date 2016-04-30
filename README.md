# Prime factors with Codeception

Write a suite of tests that display the prime factors for a number.

# Examples

The prime factor/s for:
* 4 are 2 * 2 or [2, 2]
* 5 is [5]
* 6 are 2 * 3 or [2, 3]
* 12 are 2 * 2 * 3 or [2, 2, 3]
* 50 are 2 * 5 * 5 or [2, 2, 5]
* 100 are 2 * 5 * 5 * 5 or [2, 2, 5, 5]

# Usage

```
composer install
./vendor/bin/codeception run unit
```

# Performance comparison to phpspec

Here are some running time comparisons regarding Codeception vs PHPSpec.

## Codeception without deep cloning of properties

![Codeception without deep cloning](http://i.imgur.com/FfKrUt9.png)

## Codeception with deep cloning of properties

![Codeception with deep cloning](http://i.imgur.com/bYqUBAG.png)

## PHPSpec

![PHPSpec](http://i.imgur.com/fJwXO8i.png)


