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
            function render_modul($i, $src)  {
                include "$src\\testy\\zadanie${i}_test.php";
            }
            
            for ($i = 1; $i <= 6; $i++) {
                echo "<section id=\"zadanie$i\">
                <h2>Zadanie $i</h2>";
                include "$src\\zadania\\zadanie${i}_opis.php";
                echo "<div class=\"solution-container\">";
                render_modul($i, $src);
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