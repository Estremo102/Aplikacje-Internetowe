<?php
  $liczba = 21.37;
  include __DIR__ . '/../rozwiazania/zadanie5.php';
  echo '<br>';
  $liczba = 6.7;
  include __DIR__ . '/../rozwiazania/zadanie5.php';
  echo '<Script> if(document.querySelector("#zadanie5 .solution-container").innerText.replaceAll("\\n", " ") === "Liczba 21.37 jest zaokrąglana w dół Liczba 6.7 jest zaokrąglana w górę") {
    progress[4] = 1;
  }
  </Script>'; 
?>