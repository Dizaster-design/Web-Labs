<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="step1.php" method="post">
            <textarea name="textStep1" rows="10" cols="30" ></textarea> <br>
            <input type="submit" value="Start step 1"> <br>
        </form>
        <?php
        echo "Количество символов: {$_COOKIE["CountSymbols"]}<br>";
        echo "Количество слов: {$_COOKIE["CountWords"]}";
        ?>
    </div>
</body>
</html>
