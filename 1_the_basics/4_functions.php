<?php

function add($one, $two) {
  // note the explicit return
  return $one + $two;
}

$result = add(1, 2);
echo $result;
echo "\n\n";

function swap(&$a, &$b) {
  $t = $a;
  $a = $b;
  $b = $t;
}

$var1 = "a";
$var2 = "b";

echo "\$var1 = $var1\n";
echo "\$var2 = $var2\n";

echo "\nSwapping...\n\n";

swap($var1, $var2);

echo "\$var1 = $var1\n";
echo "\$var2 = $var2\n";
