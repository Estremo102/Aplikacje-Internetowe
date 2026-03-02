<?php 
    $title = $_GET['title'] ?? null; 
    $src = $_GET['src'] ?? null; 
    include $_SERVER['DOCUMENT_ROOT'].'/php/head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/php/navbox.php'; 
    $php = "C:\\xampp\\php\\php.exe"
?>
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
                include "$src\\zadania\\zadanie${i}_opis.php";
                echo "<div class=\"solution-container\">";
                exec("$php $src\\testy\\zadanie${i}_test.php", $lines, $exitCode);
                $output = implode("\n", $lines);
                echo $exitCode;
                echo $output;
                echo '</div></section>'; 
                $lines = NULL;  
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