<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error | Aplicacion MVC</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant("URL") ?>/public/css/errores.css">
</head>
<body>
    <?php require "views/header.php"; ?>

    <main class="main">
        <div class="container">
        <div class="error-container">
            <div class="img-error">
            </div>
            <div class="error-info">
                <p class="title">¡Ha ocurrido un error!</p>
                <h2 class="error-message"><?php echo $this->mensaje; ?></h2>
            </div>
        </div>
        </div>
    </main>

    <?php require "views/footer.php"; ?>
</body>
</html>