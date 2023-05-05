<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cats&Dogs</title>
</head>
<body>

    <header class="bg-secondary">
        <nav class="container">
            <ul class="nav d-flex align-items-center p-5 gap-5">
                <h1 class="text-light">Cats & Dogs</h1>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row p-5">

                <?php foreach ($products as $product) { ?>
                <div class="col col-3">
                    <?php echo $product->getProductCard($product); ?>
                </div>
                <?php } ?> 

            </div>

        </div>
    </main>
    
</body>
</html>