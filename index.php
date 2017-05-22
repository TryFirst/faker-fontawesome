<?php

require __DIR__ .'/vendor/autoload.php';

use faker\provider\FontAwesomeGeneratorProvider;

$faker = Faker\Factory::create();
$faker->addProvider(new FontAwesomeGeneratorProvider($faker));
$icon = $faker->fontAwesomeIcon();
$iconList = $faker->fontAwesomeIcons();
?>

<html>
    <head>
        <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
    <h1>Testing faker: <?php echo $faker->name; ?></h1>
    <h2>Testing faker FontAwesome (4.7.0) function fontAwesomeIcon(): <?php echo $icon; ?></h2>
    <div style="padding:50px; margin:20px; border:1px solid #111111;">
        <i style="font-size:200px" class="fa <?php echo $icon; ?>" aria-hidden="true"></i><br/><br/>
        <?php echo $icon; ?>
    </div>

    <h2>Testing faker FontAwesome function fontAwesomeIcons():</h2>
    <?php
        foreach ($iconList as $singleIcon){
            echo '<i style="font-size:1.2em; padding:5px;" class="fa '. $singleIcon . '" aria-hidden="true"></i>';
        }
    ?>

    </body>
</html>