<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta | Aplicacion MVC</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/consulta.css">
</head>

<body>
    <?php require "views/header.php"; ?>

    <main class="main">
        <p class="title">Consulta</p>
        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include_once "models/alumno.php"; 
                    foreach ($this->alumnos as $row) { 
                    $alumno = new Alumno();
                    $alumno = $row;
                ?>
                <tr>
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a href="<?php echo constant("URL")."/consulta/verAlumno/".$alumno->matricula ?>">Editar</a></td>
                    <td><a href="<?php echo constant("URL")."/consulta/eliminarAlumno/".$alumno->matricula ?>">Eliminar</a></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require "views/footer.php"; ?>
</body>

</html>