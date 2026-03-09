<?php
    $title = $_GET['title'] ?? 'Strona Główna';
    $src = $_GET['src'] ?? null;
    include $_SERVER['DOCUMENT_ROOT'].'/php/head.php';
    if ($src) {
        include $_SERVER['DOCUMENT_ROOT'].'/php/navbox.php';
    }
?>
<div class="content">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php/sidebar.php';
    if ($src) {
        echo '<main>';
        include $_SERVER['DOCUMENT_ROOT'].'/php/temat.php';
        echo '</main>';
    } else {
        include $_SERVER['DOCUMENT_ROOT'].'/php/home.php';
    }
?>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>