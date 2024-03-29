# Faker-FontAwesome

Faker extension for randomly picking a [FontAwesome](https://fontawesome.com/) (5.9.0 / 2019-07-14) icon.

# Faker Extension

An extension of the [fzaninotto/Faker](https://github.com/fzaninotto/Faker) PHP Library.
This has two functions that will either return a random icon name or the entire array of names.
This extension was forked from [IORoot/faker-fontawesome](https://github.com/IORoot/faker-fontawesome).

The library contains all of [FontAwesome's Library](https://fontawesome.com/cheatsheet).

## Installation

```sh
composer require tryfirst/fontawe-somegenerator
```

Alternatively, add to your composer.json file with:

```sh
"require": {
        "tryfirst/fontawe-somegenerator": "v0.0.2"
    }
```

## Usage

Use the `FontAwesomeGeneratorProvider` class in combination with [Faker](https://github.com/fzaninotto/Faker) to produce the random font name:

```php
    <?php
    require __DIR__ .'/vendor/autoload.php';

    use faker\provider\FontAwesomeGeneratorProvider;

    $faker = Faker\Factory::create();
    $faker->addProvider(new FontAwesomeGeneratorProvider($faker));
    $colour = $faker->fontAwesomeIcon();
    ?>
    <i style="font-size:200px" class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
```

This will generate an i tag with a random fontawesome icon.

## Example index file

Within the `vendor/tryfirst/fontawesomegenerator/` folder you will find an `index.php` file which can be moved
to your root directory and will provide an example of both functions.

![Example inde file](fontawesome_test.png)
*Sample output*

## Tests

There are two PHPUnit tests that will check that the library will return a correct FontAwesome name value and that it is contained
within the 5.9.0 library.
