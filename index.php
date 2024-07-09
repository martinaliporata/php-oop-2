<?php
require_once __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">
            BoolShop
        </h1>
    </header>
    <main class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image">
                                <img class="img-fluid" src="<?php echo $product->getImgUrl();?>" alt="">
                            </div>
                            <h5 class="card-title"><?php echo $product ->getName() ?></h5>
                            <p class="card-text">della <?php echo $product ->getBrand()?></p>
                            <p class="card-text">prezzo: <?php echo $product ->getPrice()?></p>, <?php echo $product ->getIsAvailable()?'disponibile' : 'non disponibile'?></p>
                            <p class="card-text">Categoria:<?php echo $product ->getCategory()->getName()?></p>
                            <?php if (get_class($product) === 'Food'){ ?>
                                <p class="card-text"> Calorie: <?php echo $product->getCalories()?></p>
                                <p class="card-text"> Peso: <?php echo $product->getWeight()?></p>
                            <?php } elseif (get_class($product) === 'Toys'){ ?>
                                <p class="card-text"> Materiale: <?php echo $product->getMaterial()?></p>
                            <?php } elseif (get_class($product) === 'Accessories'){ ?>
                            <p class="card-text"> Dimensione: <?php echo $product->getSize()?></p>
                            <p class="card-text"> Colore: <?php echo $product->getColor()?></p>
                            <p class="card-text"> Funzione: <?php echo $product->getFunction()?></p>
                            <?php } ?>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </main>
</body>
</html>