<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./response.php" method="GET">

        <div>
            <div>
                <label for="paragraph">
                    Paragrafo
                </label>
            </div>
            <textarea name="words" id="paragraph" cols="30" rows="10"></textarea>
        </div>

        <div>
            <div>
                <label for="censura">
                    Parola da censurare
                </label>
            </div>
            <input type="text" name="censura" id="censura" value="" placeholder="Parola da censurare..">
        </div>

        <button>
            Invia
        </button>

    </form>
</body>
</html>