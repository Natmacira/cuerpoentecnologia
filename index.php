<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuerpo en Tecnologia</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/jsmejor.js"></script>
</head>

<body>
    <header>
        <ul id="lista-header">
            <li class="li-header">
                <h1> Cuerpo & Tecnlogía</h1>
            </li>
            <li class="li-header"><img src="./img/undraw_social_serenity_vhix (1).svg"
                    alt="ilustración" id="img-header">
            </li>
        </ul>
    </header>
    <main>

        <article class="formularios">
            <p><strong>¿Trabajás en el mundo de la informática?</strong>
            </p>
            <label>Si
                <a href="#listaForm"><input type="radio" class="respuesta" id="si" name="trabajas-con-teconlogia"
                        value="yes"></a>
            </label>
            <label>No
                <input type="radio" class="respuesta" id="no" name="trabajas-con-teconlogia" value="no">
            </label>
            <p id="respuestaNO">Muchas gracias, no hace falta que llenes el formulario.</p>
            <p id="respuestaSI">Te invitamos a responder nuestro <a href="#listaForm">formulario</a>:</p>
        </article>
        <figure><img src="./img/undraw_online_posts_h475 (1).svg"
                alt="ilustración-persona-pensando" class="ilustración-persona"></figure>
        <form action="./script.php" method="POST" class="formularios" id="form">
            <ul id="listaForm">
                <li>
                    <label >¿A qué área te dedicas?
                        <input  type="text" name="areaLaboral">
                    </label>
                </li>
                <br>
                <li> <label> ¿Cuántas horas le dedicas a la semana?
                        <input type="number" name="cantidadHoras">
                    </label>
                </li>
                <br>
                <li>
                    <p>¿Prestás atención a la postura corporal cuando estás trabajando?</p>
                    <label>SI<input type="radio" value="yes" name="atencion-postura"></label>
                    <label>NO<input type="radio" value="no" name="atencion-postura" ></label>
                </li>
                <br>
                <li>
                    <p>¿Sentís dolores relacionados al trabajo que hacés con la computadora?</p>
                    <label>SI<input type="radio" value="yes" name="dolores"></label>
                    <label>NO<input type="radio" value="no" name="dolores"></label>
                </li>
                <br>
                <li>
                    <p>¿Hacés alguna actividad física para compensar el tiempo que pasas trabajando en la computadora?
                    </p>
                    <label>SI<input class="respuestaActividad" type="radio" value="yes" name="compensar"></label>
                    <label>NO<input class="respuestaActividad" type="radio" name="compensar"></label>
                    <p id="queActividadHaces"> ¿Qué actividad hacés y cuantas horas le dedicás? <input type="text" name="que-actividad-haces"></p>

                </li>

            </ul>
            <input class="input" type="submit" id="submit" value="Enviar">
            <figure class="ilustración-persona"><img src="img/undraw_respond_8wjt (1).svg"
                alt="ilustración-persona-danzando"></figure>
        </form>
  
      
    </main>


</body>



</html>