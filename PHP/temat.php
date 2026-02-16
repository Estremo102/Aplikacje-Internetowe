<?php $title = $_GET['title'] ?? null; $src = $_GET['src'] ?? null; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navbox.php'; ?>
<div class="content">
    <aside>
        <ul>
    
        </ul>
    </aside>
    <main>
        <?php
            for ($iii = 1; $iii <= 6; $iii++) {
                echo "<section id=\"zadanie$iii\">
                <h2>Zadanie $iii</h2>";
                include "$src\\zadania\\zadanie${iii}_opis.php";
                echo "<div class=\"solution-container\">";
                include "$src\\testy\\zadanie${iii}_test.php";
                echo '</div></section>';   
            }
        ?>
    </main>
</div>
<script defer> 
    let buttons = this.document.querySelectorAll('nav ul li');
    for(let i = 0; i < buttons.length; i++) {
        if(buttons[i].classList.contains('done')) {
            if( localStorage.getItem(i+'exercise') !== 'true') {
                buttons[i].classList.add('changed');
            }
            localStorage.setItem(i+'exercise', 'true');
        } else {
            localStorage.setItem(i+'exercise', 'false');
        }
    }
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>