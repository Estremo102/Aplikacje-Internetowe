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
                echo "<div class=\"solution-container\" id=\"wynik-zad$i\"><em>Ładowanie wyniku...</em></div>";
                echo '</section>'; 
            }
        ?>
    </main>
</div>
<script defer> 
    // Funkcja do aktualizacji paska postępu
    function updateProgressBar() {
        const doneCount = document.querySelectorAll('nav ul li.done').length;
        const progressBar = document.querySelector('nav progress');
        if (progressBar) {
            progressBar.value = doneCount;
        }
    }

    // Funkcja do pobierania i przetwarzania wyników testów
    async function loadTestResults() {
        const srcPath = new URLSearchParams(window.location.search).get('src');
        
        if (!srcPath) {
            console.error('Brak parametru src w URL');
            return;
        }

        for (let i = 1; i <= 6; i++) {
            try {
                const response = await fetch(`${srcPath}/testy/zadanie${i}_test.php`);
                const data = await response.json();
                
                const container = document.getElementById(`wynik-zad${i}`);
                if (!container) continue;

                // Wyświetl komunikaty
                if (data.komunikaty && data.komunikaty.length > 0) {
                    container.innerHTML = data.komunikaty.join('<br>');
                } else {
                    container.innerHTML = data.poprawne ? '✓ Zadanie wykonane poprawnie' : '✗ Zadanie zawiera błędy';
                }

                // Ustaw klasę .done na elemencie menu
                const navButtons = document.querySelectorAll('nav ul li');
                if (navButtons[i - 1]) {
                    if (data.poprawne) {
                        navButtons[i - 1].classList.add('done');
                    } else {
                        navButtons[i - 1].classList.remove('done');
                    }
                }
                
                // Aktualizuj pasek postępu po każdym fetchu
                updateProgressBar();
            } catch (error) {
                console.error(`Błąd przy ładowaniu zadania ${i}:`, error);
                const container = document.getElementById(`wynik-zad${i}`);
                if (container) {
                    container.innerHTML = '✗ Błąd przy ładowaniu wyniku';
                }
            }
        }

        // Zaktualizuj localStorage na podstawie klas .done
        let buttons = document.querySelectorAll('nav ul li');
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
        
        // Finalna aktualizacja paska postępu
        updateProgressBar();
    }

    // Uruchom ładowanie wyników na załadowaniu stron
    document.addEventListener('DOMContentLoaded', loadTestResults);
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>