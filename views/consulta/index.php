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

        <?php
            var_dump($this->alumnos);
        ?>
    </main>

    <?php require "views/footer.php"; ?>
</body>
</html>