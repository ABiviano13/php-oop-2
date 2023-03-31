<?php
require_once './models/Product.php';
require_once './models/Category.php';

$dog = new Category('Cane', './img/cane.jpg');
$cat = new Category('gatto', './img/gatto.jpg');

$snack_dog = new Product('Croccantini', '4', 'Croccantini per cane', $dog)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Animals</title>
</head>
<body>
    <header>
        <h1>Prodotti per animali</h1>
    </header>
    <main>
        <?php  echo $snack_dog->getProduct()?>
    </main>
    
</body>
</html>