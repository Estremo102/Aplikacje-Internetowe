<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurs PHP</title>
    <link rel="stylesheet" href="/php/style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="/php/images/PHP-logo.svg"><h1> Kurs PHP - 
            <?php 
            $title = ucfirst(explode('.', basename($_SERVER['PHP_SELF']))[0]);
            echo $title == 'Index' ? 'Strona Główna' : $title;
            ?>
        </h1>
    </header>