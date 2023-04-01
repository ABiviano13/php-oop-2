<?php
require_once './models/Product.php';

$snack_dog = new Product('Bastoncini', '2,99', 'Bastoncini Vegetali per cane', 'Cane', './img/snack-per-cani.png');

// var_dump($snack_dog);

$game_dog = new Product('Corda osso', '4,19', 'Gioco per cane', 'Cane', './img/corda-per-cane.jpg');

// var_dump($game_dog);

$outfit_dog = new Product('Outfit IT', '15,00', 'Outfit IT per cane', 'Cane', './img/outfit_cane.jpg');

// var_dump($outfit_dog);

$home_dog = new Product('Cuccia', '116,00', 'Cuccia per cane', 'Cane', './img/cuccia_cane.jpg');

// var_dump($home_dog);


$snack_cat = new Product('Snack', '19,90', 'Bastoncini Vegetali per gatto', 'Gatto', './img/snack-per-gatti.jpg');

// var_dump($snack_cat);

$game_cat = new Product('Tiragraffi', '169,00', 'Gioco per gatto', 'Gatto', './img/tiragraffi-per-gatti.jpg');

// var_dump($game_cat);

$outfit_cat = new Product('Outfit Dottore', '20,00', 'Outfit Dottore per gatto', 'Gatto', './img/outfit_gatto.jpg');

// var_dump($outfit_cat);

$home_cat = new Product('Cuccia', '116,00', 'Cuccia per gatto', 'Gatto', './img/cuccia_gatto.jpg');

// var_dump($home_cat);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>E-Commerce Animals</title>
</head>
<body>

    <main>
        <div class="container">

            <div class="section">

                <h1 class="title-section text-center py-5">
                    Prodotti per animali
                </h1>

                <div class="row gap-1 py-3">
                    <h2>
                        Sezione Cani
                    </h2>
                    <?php echo $snack_dog->printCardProductHTML()?>
                    <?php echo $game_dog->printCardProductHTML()?>
                    <?php echo $outfit_dog->printCardProductHTML()?>
                    <?php echo $home_dog->printCardProductHTML()?>
                </div>

                <div class="row gap-1 py-3">
                    <h2>
                        Sezione Gatti
                    </h2>
                    <?php echo $snack_cat->printCardProductHTML()?>
                    <?php echo $game_cat->printCardProductHTML()?>
                    <?php echo $outfit_cat->printCardProductHTML()?>
                    <?php echo $home_cat->printCardProductHTML()?>
                </div>

            </div>

        </div>
    </main>
    
</body>
</html>