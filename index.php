<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Apuesta y Gana</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/png" />
    <link href="./css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>
                Apuesta y Gana
            </h1>
        </div>
        <div id="content" class="caja-destacada">

            <?php
            $retirar = false;
            if (!isset($_POST["numero"])) {
                //Primera carga de página
                $apuesta = 0;
            ?>
                <h1>Apuesta y Gana</h1>
                <label for="numero">Por favor, introduzca la cantidad que quiere apostar:</label>
                <form action="#" method="post">
                    <input type="number" name="numero" id="numero" autofocus>€
                    <input type="hidden" name="total" value="<?= $apuesta ?>"> <!-- Input Oculto -->
                    <br><input type="submit" value="Aceptar">
                </form>
            <?php
            } elseif ( isset($_POST["numero"]) && isset($_POST["retirar"] )){
                $apuesta = $_POST["numero"];
                ?>
                <h1>Apuesta y Gana</h1>
                <?php
                echo "Ha conseguido $apuesta €";
            }

                else {
                //El usuario ha enviado un valor
                $apuesta = $_POST["numero"];
                
                /* $i = rand(0, 2); */
                switch (rand(0, 2)) {
                    case 0:
                ?>
                        <img src="./img/mediolimon.jpg" alt="medio limón">
                        <h1>Ha perdido la mitad</h1>
                        <h1>Ahora tienes <?=$apuesta =  $apuesta / 2 ?></h1>
                        <form method="post">
                            <input type="hidden" name="numero" value="<?= $apuesta ?>"> <!-- Input Oculto -->
                            <br><input type="submit" value="Sigo Jugando">
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="numero" value="<?= $apuesta ?>"> <!-- Input Oculto -->
                            <input type="hidden" name="retirar" value="<?= $retirar = true ?>"> <!-- Input Oculto -->
                            <br><input type="submit" value="Me planto">
                        </form>
                    <?php
                        break;
                    case 1:
                    ?>
                        <img src="./img/gatochinosuerte.gif" alt="gato">
                        <h1>Ha doblado el dinero</h1>
                        <h1>Ahora tienes <?= $apuesta = $apuesta * 2 ?></h1>
                        <form action="#" method="post">
                            <input type="hidden" name="numero" value="<?= $apuesta ?>"> <!-- Input Oculto -->
                            <br><input type="submit" value="Sigo Jugando">
                            
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="numero" value="<?= $apuesta ?>"> <!-- Input Oculto -->
                            <input type="hidden" name="retirar" value="<?= $retirar = true ?>"> <!-- Input Oculto -->
                            <br><input type="submit" value="Me planto">
                        </form>
                    <?php
                        
                        break;
                    case 2:
                    ?>
                        <img src="./img/calavera.png" alt="calavera">
                        <h1>Lo siento ha perdido</h1>
                        <form action="./index.php" method="post">
                            <br><input type="submit" value="Volver a jugar">
                        </form>
                <?php
                        break;
                }
            };
            ?>
            </br>
        </div>
        <div id="footer">
            ANGEL DANIEL RUIZ MONTES
        </div>
    </div>
</body>