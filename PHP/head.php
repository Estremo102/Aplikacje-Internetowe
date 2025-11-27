<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurs PHP</title>
    <link rel="stylesheet" href="/php/style.css">
    <?php ?>
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="/php/PHP-logo.svg"><h1> Kurs PHP - <?php echo ucfirst(explode('.', basename($_SERVER['PHP_SELF']))[0]); ?></h1>
    </header>