<?php

$api_yoga   = file_get_contents('https://raw.githubusercontent.com/rebeccaestes/yoga_api/master/yoga_api.json');

$array_yoga = json_decode($api_yoga, true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuerpo en Tecnologia</title>
    <script src="./js/jsmejor.js"></script>
    <link rel="stylesheet" href="./css/gracias.css">
</head>

<body>
   
    <main>

    <figure class="ilustración-persona"><img src="./img/undraw_workout_gcgu.svg"
                alt="ilustración-persona-danzando"></figure>
        <section class="formularios">
            <p id="gracias" ><strong> Muchas gracias por haber participado</strong></p>
            <p>les dejamos a continuación una lista de posturas de yoga para que puedan tener en cuenta</p>
        </section>
        <ul>
        <?php
        foreach ($array_yoga as $key => $value){
        
        echo '<li class="li-api" > <p> <strong>' . $value['sanskrit_name'] . ': </strong>' . $value['english_name'] . '</p> <br> <img class="img-api" src=" ' .  $value['img_url'] . ' " </li>' ;
        
        }
        ?>
        </ul>
    </main>


</body>



</html>





