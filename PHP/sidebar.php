<?php $current = $_GET['src'] ?? ''; ?>
    <aside>
        <h3>PHP podstawy</h3>
        <ul>
            <li class="<?= $current === 'Wprowadzenie' ? 'active' : '' ?>">
                <a href="index.php?title=Wprowadzenie&src=Wprowadzenie">Wprowadzenie</a>
            </li>
            <li class="<?= $current === 'Typy_danych' ? 'active' : '' ?>">
                <a href="index.php?title=Typy danych&src=Typy_danych">Typy danych</a>
            </li>
            <li class="<?= $current === 'konwersja_typow' ? 'active' : '' ?>">
                <a href="index.php?title=Konwersja Typów&src=konwersja_typow">konwersja typów danych</a>
            </li>
            <li class="<?= $current === 'Funkcje_matematyczne' ? 'active' : '' ?>">
                <a href="index.php?title=Funkcje matematyczne&src=Funkcje_matematyczne">Funkcje Matematyczne</a>
            </li>
            <li class="<?= $current === 'Stale' ? 'active' : '' ?>">
                <a href="index.php?title=Stałe&src=Stale">Stałe w PHP</a>
            </li>
            <li class="<?= $current === 'Instrukcje_warunkowe' ? 'active' : '' ?>">
                <a href="index.php?title=Instrukcje Warunkowe&src=Instrukcje_warunkowe">Instrukcje warunkowe</a>
            </li>
        </ul>
        <h3>PHP + MySQL</h3>
        <ul>
            <li class="<?= $current === 'polaczenie_z_baza_danych' ? 'active' : '' ?>">
                <a href="index.php?title=Połączenie z bazą danych&src=polaczenie_z_baza_danych">Połączenie z bazą danych</a>
            </li>
        </ul>
    </aside>