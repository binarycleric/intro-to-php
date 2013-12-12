<?php
$names = Array(
  "Thomas", 
  "Grant", 
  "Andy", 
  "Jennie", 
  "Chris",
  "Greg",
  "Marylou",
  "Ying",
  "Merve",
  "Peter"
);

$everyone_but_peter = Array();

foreach($names as $name) {
  if($name != "Peter") {
    array_push($everyone_but_peter, $name);
  } 
}

print_r($everyone_but_peter);












// while loops

echo "\n\n";

$i = 0;
while($i < 5) {
  $i++;
}
echo "\$i is {$i}\n\n";












// do while loops

$j = 0;
do {
  $j++;
} while($j < 5);
echo "\$j is {$j}\n\n";













// for loops

for($k = 0; $k <= 10; $k++) {
  echo "."; 
}
echo "\n\n";
echo "\$k is {$k}\n\n";






