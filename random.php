<?php
require 'config.php';


$name = filter_input(INPUT_POST, 'name');
$char = filter_input(INPUT_POST,'char');

if($name && $char){
   $y =  rand(0,6);

   switch($y){
       case 0:
        $classe = 'Marauder';
       break; 
       case 1:
        $classe = 'Duelist';
       break; 
       case 2:
        $classe = 'Ranger';
       break; 
       case 3:
        $classe = 'Shadow';
       break; 
       case 4:
        $classe = 'Witch';
       break; 
       case 5:
        $classe = 'Templar';
       break; 
       case 6:
        $classe = 'Scion ';
       break; 
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>assets/css/login.css" />
    <title>Ramdomizador</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="<?=$base;?>assets/images/logo.png" /></a>
        </div>
    </header>
    <section>
        <img src="<?=$base;?>assets/images/<?=$y;?>.jpg" alt="<?=$classe;?>">
    </section>
    <section class="texto">
        <h3>A classe escolhida foi:  <?=$classe;?></h3>
    </section>

</body>
</html>