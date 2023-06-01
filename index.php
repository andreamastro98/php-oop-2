<?php

require_once __DIR__ . '/database/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>php-oop-2</title>
</head>

<body>

    <!-- nav -->
    <nav class="navbar bg-primary mb-5" data-bs-theme="dark">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand">PetShop</a>
        </div>
    </nav>

    <div class="mb-5 container-1 row gap-5">

        <?php foreach ($arrayProducts as $elem) { ?>
            <div class="card col-3">
                <img src="https://images.unsplash.com/photo-1597843786411-a7fa8ad44a95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $elem->ProductType[0]->nomeProdotto ?></h3>
                    <h5 class="card-text">Categoria: <?php echo $elem->categoria ?></h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-text">Prezzo: <?php echo $elem->ProductType[0]->prezzo ?></span>
                        <i class="fa-solid round <?php echo $elem->animale[0]->nomeAnimale ?>"></i>
                    </div>                    
                </div>
            </div>
        <?php } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>