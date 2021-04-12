<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>StacklyPost</title>
</head>
<body>
    <div class="contenedor-inicio">

        <header>
            <?php include("vista/navbar/navbar.php"); ?>
        </header>

        <div class="grid-inicio">
            <!--INICIO CARD POST-->
            <div class="componente-card">
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
                <?php include("vista/card/card.php"); ?>
            </div>
            <!--FIN CARD POST-->
        </div>
    </div>
    <footer>
        <?php include("vista/footer/footer.php"); ?>
    </footer>
</body>
</html>