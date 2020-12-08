<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta | Aplicacion MVC</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/consulta_detalle.css">
</head>

<body>
    <?php require "views/header.php"; ?>

    <main class="main" id="main">

        <p class="title">Detalle de Alumno</p>

        <?php
        if (isset($this->mensaje)) {
            if ($this->mensaje == 1) {
        ?>
                <div class="message-container bgcolor-1" id="divMensaje">
                    <span>Nuevo alumno registrado</span>
                    <button id="eliminarDivMensaje">&#10005;</button>
                </div>
            <?php
            } else {
            ?>
                <div class="message-container bgcolor-2" id="divMensaje">
                    <span>No se pudo registrar al nuevo alumno</span>
                    <button id="eliminarDivMensaje">&#10005;</button>
                </div>
            <?php
            }
        };
        ?>

        <div class="form-container">
            <form action="<?php echo constant("URL"); ?>/consulta/actualizarAlumno" method="POST" class="formulario-alumnos">
                <fieldset style="background-color: black;">
                    <div class="form-div">
                        <legend class="form-title">Formulario</legend>
                    </div>
                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="matricula">Matricula: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="matricula" value="<?php echo $this->alumno->matricula ?>" readonly>
                        </div>
                    </div>

                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="nombre">Nombre: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="nombre" value="<?php echo $this->alumno->nombre ?>" required>
                        </div>
                    </div>

                    <div class="form-div">
                        <div class="form-div-label">
                            <label for="apellido">Apellido: </label>
                        </div>
                        <div class="form-div-input">
                            <input type="text" name="apellido" value="<?php echo $this->alumno->apellido ?>" required>
                        </div>
                    </div>

                    <div class="form-div">
                        <input type="submit" value="Editar Alumno">
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