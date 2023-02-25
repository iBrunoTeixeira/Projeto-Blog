<?php

include_once ("helpers/url.php");
include_once ("data/process.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo"><img src="img/logo.svg" alt="Blog Codar" ></a>
        <nav>
            <?php print_r($tags); ?>
            <ul id="navbar">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a id="btn-categoria" href="categoria.php" class="nav-link">Categoria</a>
                    <ul class="dropdown-menu">
                        <?php foreach($tags as $tag): ?>
                            <li><a href="#"><?= $tag?></a></li>s
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>

</html>