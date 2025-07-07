<?php

for ($i = 0; $i < 10; $i++) {
  if ($i == 5) {
    continue;
  }
  echo $i . '<br>';
}
echo '<br>';
for ($j = 0; $j < 10; $j++) {
  if ($j == 5) {
    break;
  }
  echo $j . '<br>';
}

?>