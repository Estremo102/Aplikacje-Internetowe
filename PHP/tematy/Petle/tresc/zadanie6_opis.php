<?php $tempi = $i?>
<h3>continue</h3>
<p>Za pomocą polecenia continue możemy pominąć bieżącą iterację i przejść do następnej:</p>
<pre><code class="language-php">$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}</code></pre>
<pre><code><?php
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}?></code></pre>
<?php $i = $tempi?>