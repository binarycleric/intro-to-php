<?php
// Associative Arrays are similar (sorta but not really) to hashes in Ruby.

$person1 = Array(
  "first_name" => "Eric",
  "last_name" => "Silver",
  "employer" => "Webkite"
);

$person2 = Array(
  "first_name" => "Rasmus",
  "last_name" => "Lerdorf",
  "employer" => "Etsy"
);

// for debugging. similar to Ruby's #pp method
print_r($person1);
print_r($person2);
