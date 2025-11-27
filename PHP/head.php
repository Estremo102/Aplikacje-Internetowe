<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            $title = ucfirst(explode('.', basename($_SERVER['PHP_SELF']))[0]);
            $title = $title == 'Index' ? 'Strona Główna' : $title;
            echo $title;
            ?>
    </title>
    <link rel="stylesheet" href="/php/style.css">
    <script src="script.js" defer></script>
    <link rel="shortcut icon" href="/php/images/PHP-logo.svg" type="image/x-icon">
</head>
<body>
    <header>
        <img src="/php/images/PHP-logo.svg"> <h1> <?php echo "Kurs PHP - $title"; ?> </h1>
    </header>