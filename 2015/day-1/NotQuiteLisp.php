<?php
$str = file_get_contents('santaDirections.txt');
$lenght = strlen($str);

$floor = 0;

for ($i = 0; $i <= $lenght; ++$i) {
  $dir = substr($str, $i, 1);
  if ($dir === '(') {
    $floor++;
  } else if ($dir === ')') {
    $floor--;
  }

  if ($floor === -1) {
    echo 'Position: ' . $i . PHP_EOL;
  }
}

echo 'Final floor: ' . $floor . PHP_EOL;