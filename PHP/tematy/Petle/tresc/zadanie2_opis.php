<?php $tempi = $i?>
<h3>Pętla do...while</h3>
<p>
    Pętla PHP do...while - przechodzi przez blok kodu co najmniej raz, a następnie powtarza pętlę tak długo, jak długo określony warunek jest prawdziwy. <br>
    składnia: 
</p>
<pre><code class="language-php">do {
  // kod do wykonania
} while (warunek);</code></pre>
<p>Przykład:</p>
<pre><code class="language-php">$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);</code></pre>
<pre><code><?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);?></code></pre>
<P>Tutaj ustawiamy zmienną $i na 8 zamiast 1 i ponownie wykonujemy tę samą pętlę do...while:</P>
<pre><code class="language-php">$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);</code></pre>
<pre><code><?php
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);?></code></pre>
<?php $i = $tempi?>