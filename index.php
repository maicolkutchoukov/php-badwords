<?php
    $nome = 'Maicol';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="./response.php">
            Vai alla Risposta
        </a>
    </div>
    <form action="./response.php" method="GET">

        <div>
            <textarea name="words" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <input type="text" name="censura" value="" placeholder="Parola da censurare..">
        </div>

        <button>
            Invia
        </button>

    </form>
</body>
</html>