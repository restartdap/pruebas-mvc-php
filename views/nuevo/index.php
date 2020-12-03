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

    <main class="main" id="main">

        <p class="title">Nuevo</p>

        <?php
        if (isset($this->mensaje)) {
            if ($this->mensaje == 1) {
        ?>
                <div class="message-container bgcolor-1" id="divMensaje">
                    <span>Nuevo alumno registrado</span>
                    <button id="eliminarDivMensaje">&#10005;</button>
                </div>
            <?php
            } else if ($this->mensaje == 2) {
            ?>
                <div class="message-container bgcolor-2" id="divMensaje">
                    <span>No se pudo registrar al nuevo alumno</span>
                    <button id="eliminarDivMensaje">&#10005;</button>
                </div>
            <?php
            } else {
            ?>
                <div class="message-container bgcolor-3" id="divMensaje">
                    <span>No se enviaron valores</span>
                    <button id="eliminarDivMensaje">&#10005;</button>
                </div>
        <?php
            }
        };
        ?>

        <div class="form-container">
            <form action="<?php echo constant("URL"); ?>/nuevo/registrarAlumno" method="POST" class="formulario-alumnos">
                <fieldset style="background-color: black;">
                    <div class="form-div">
                        <legend class="form-title">Formulario</legend>
                    </div>
                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="matricula">Matricula: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="matricula" required>
                        </div>
                    </div>

                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="nombre">Nombre: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="nombre" required>
                        </div>
                    </div>

                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="apellido">Apellido: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="apellido" required>
                        </div>
                    </div>

                    <div class="form-div">
                        <input type="submit" value="Registrar Alumno">
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <?php require "views/footer.php"; ?>

    <script defer>
        const main = document.getElementById("main");
        const divMensaje = document.getElementById("divMensaje");
        const eliminarDivMensaje = document.getElementById("eliminarDivMensaje");

        eliminarDivMensaje.addEventListener("click", () => {
            main.removeChild(divMensaje);
        });
    </script>
</body>

</html>