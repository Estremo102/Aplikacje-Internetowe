<?php
    $title = $_GET['title'] ?? null;
    $src = $_GET['src'] ?? null;
?>
        <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<section id=\"zadanie$i\">
                <h2>Zadanie $i</h2>";
                include "$src\\zadania\\zadanie${i}_opis.php";
                echo "<button class=\"check-task-btn\" data-task=\"$i\" style=\"padding: 0.5rem 1rem; margin: 1rem 0; cursor: pointer;\">Sprawdź to zadanie</button>";
                echo "<div class=\"solution-container\" id=\"wynik-zad$i\"></div>";
                echo '</section>';
            }
        ?>
<script defer>
    const srcPath = new URLSearchParams(window.location.search).get('src');

    function updateProgressBar() {
        const doneCount = document.querySelectorAll('nav ul li.done').length;
        const progressBar = document.querySelector('nav progress');
        if (progressBar) {
            progressBar.value = doneCount;
        }
    }

    function updateLocalStorage() {
        let buttons = document.querySelectorAll('nav ul li');
        for (let i = 0; i < buttons.length; i++) {
            if (buttons[i].classList.contains('done')) {
                if (localStorage.getItem(i + 'exercise') !== 'true') {
                    buttons[i].classList.add('changed');
                }
                localStorage.setItem(i + 'exercise', 'true');
            } else {
                localStorage.setItem(i + 'exercise', 'false');
            }
        }
    }

    async function runSingleTest(taskNumber) {
        if (!srcPath) {
            console.error('Brak parametru src w URL');
            return;
        }

        try {
            const response = await fetch(`${srcPath}/testy/zadanie${taskNumber}_test.php`);
            const data = await response.json();

            const container = document.getElementById(`wynik-zad${taskNumber}`);
            if (!container) return;

            if (data.komunikaty && data.komunikaty.length > 0) {
                container.innerHTML = data.komunikaty.join('<br>');
            } else {
                container.innerHTML = data.poprawne ? '✓ Zadanie wykonane poprawnie' : '✗ Zadanie zawiera błędy';
            }

            const navButtons = document.querySelectorAll('nav ul li');
            if (navButtons[taskNumber - 1]) {
                if (data.poprawne) {
                    navButtons[taskNumber - 1].classList.add('done');
                } else {
                    navButtons[taskNumber - 1].classList.remove('done');
                }
            }

            updateProgressBar();
            updateLocalStorage();
        } catch (error) {
            console.error(`Błąd przy ładowaniu zadania ${taskNumber}:`, error);
            const container = document.getElementById(`wynik-zad${taskNumber}`);
            if (container) {
                container.innerHTML = '✗ Błąd przy ładowaniu wyniku';
            }
        }
    }

    async function loadTestResults() {
        if (!srcPath) {
            console.error('Brak parametru src w URL');
            return;
        }

        for (let i = 1; i <= 6; i++) {
            await runSingleTest(i);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.check-task-btn').forEach(button => {
            button.addEventListener('click', function () {
                const taskNumber = parseInt(this.getAttribute('data-task'));
                runSingleTest(taskNumber);
            });
        });

        const runAllButton = document.getElementById('run-all-tests');
        if (runAllButton) {
            runAllButton.addEventListener('click', loadTestResults);
        }
    });
</script>