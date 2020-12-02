<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo | Aplicacion MVC</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/nuevo.css">
</head>

<body>
    <?php require "views/header.php"; ?>

    <main class="main">

        <p class="title">Nuevo</p>

        <p>
            <?php
            foreach ($_POST as $valor_campo) {
                echo "{$valor_campo}<br>";
            }
            ?>
        </p>

        <div class="form-container">
            <form action="<?php echo constant("URL"); ?>/nuevo/registrarAlumno" method="POST" class="formulario-alumnos">
                <fieldset>
                    <div class="form-div">
                        <legend class="form-title">Formulario</legend>
                    </div>
                    <div class="form-div">
                        <label for="matricula">Matricula: </label>
                        <input type="text" name="matricula">
                    </div>

                    <div class="form-div">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre">
                    </div>

                    <div class="form-div">
                        <label for="apellido">Apellido: </label>
                        <input type="text" name="apellido">
                    </div>

                    <div class="form-div">
                        <input type="submit" value="Registrar Alumno">
                    </div>
                </fieldset>
            </form>
        </div>

    </main>

    <?php require "views/footer.php"; ?>
</body>

</html>