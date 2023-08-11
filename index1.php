<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 06</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container">
        <div id="box0">
            <h1>Risultati</h1>
            <?php
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
            ?>

            <p>
                <?php echo "numero1 + numero2 = " . $numero1 + $numero2; ?>
            </p>
            <p>
                <?php echo "numero1 - numero2 = " . $numero1 - $numero2; ?>
            </p>
            <p>
                <?php echo "numero1 x numero2 = " . $numero1 * $numero2; ?>
            </p>
            <p>
                <?php echo "numero1 : numero2 = " . $numero1 / ($numero2 == 0 ? 1 : $numero2); ?>
            </p>
            <p>
                <?php echo "numero1<sup>2</sup> = " . $numero1 * $numero1 ?>
            </p>
            <p>
                <?php echo "numero2<sup>3</sup> = " . $numero2 * $numero2 * $numero2; ?>
            </p>
        </div>
        <div id="box1">
            <h1>Esercizio 06</h1>


            <form action="index1.php" method="post">
                <label for="numero1">Numero 1</label>
                <input type="number"  name="numero1" min="0" max="9999" placeholder="Inserire nuemro 1" id="numero1" autocomplete="off" required>
                <label for="numero2">Numero 2</label>
                <input type="number"  name="numero2" min="0" max="9999" placeholder="Inserire numero 2" id="numero2" autocomplete="off" required>
                <input type="submit" value="invio">
            </form>
        </div>
    </div>



</body>

</html>