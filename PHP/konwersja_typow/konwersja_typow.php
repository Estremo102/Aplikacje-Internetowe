<?php include $_SERVER['DOCUMENT_ROOT'].'/php/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navbox.php'; ?>
<div class="content">
    <aside>
        <ul>

        </ul>
    </aside>
    <main>
        <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<section id=\"zadanie$i\">
            <h2>Zadanie $i</h2>";
            include "zadania/zadanie${i}_opis.php";
            echo "<div class=\"solution-container\">";
            include "testy/zadanie${i}_test.php";
            echo '</div></section>';   
            }
        ?>
    </main>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>