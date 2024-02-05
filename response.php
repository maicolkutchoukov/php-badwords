<?php
    $words = $_GET['words'];
    $censorship = $_GET['censura'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php    
            echo $words, ' Lunghezza: ', strlen($words);
        ?>
    </p>
    <span>
        Nuova stringa con censura:
    </span>
    <p>
        <?php
            $newString = str_replace($censorship, '***', $words);
            echo $newString, ' Lunghezza: ', strlen($newString); 
        ?>
    </p>
        
</body>
</html>