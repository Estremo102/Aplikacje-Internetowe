<h3>Funkcja rand()</h3>
<p>Funkcja rand() generuje losową liczbe.</p>
<pre><code class="language-php">echo(rand());</code></pre>
<pre><code><?php echo(rand()); ?></code></pre>
<p>
    Aby uzyskać większą kontrolę nad liczbą losową, możesz dodać opcjonalne parametry min i max, aby określić najmniejszą i największą liczbę całkowitą, która ma zostać zwrócona. <br><br>
    Na przykład, jeśli chcesz uzyskać losową liczbę całkowitą z zakresu od 21 do 37 (włącznie), użyj funkcji rand(21, 37):
</p>
<pre><code class="language-php">echo(rand(21, 37));</code></pre>
<pre><code><?php echo(rand(21, 37)); ?></code></pre>