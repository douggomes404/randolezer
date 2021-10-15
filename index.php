<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="<?=$base;?>assets/images/logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>random.php">
        <?php if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash']= '';?>
            <?php endif;?>
            <input placeholder="Digite seu nome" class="input" type="text" name="name" />

            <input placeholder="Digite seu ultima classe jogada. " class="input" type="text" name="char" />

            <input class="button" type="submit" value="Gerar desafio" />

        </form>
    </section>
</body>
</html>