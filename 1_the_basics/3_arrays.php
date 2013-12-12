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
);

echo 'Hello ' . implode(", ", $names) . ", and anyone else I missed!\n";

echo "\n\n";

$random_index = rand(0, count($names)-1);
echo "So {$names[$random_index]} what do you think of PHP?\n";
