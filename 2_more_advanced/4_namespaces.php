<?php

// Namespaces are similar to modules in Ruby except that they 
// cannot be nested within each other and only one namespace 
// may exist per file.

// Oh yeah, this is how to load libraries in PHP.
require "./lib/showclix.php";
require "./lib/webkite.php";

echo Webkite\Application::language() . "\n";
echo Webkite\Employees::size() . "\n";
echo Webkite\Office::location() . "\n";

echo Showclix\Application::language() . "\n";
echo Showclix\Employees::size() . "\n";
echo Showclix\Office::location() . "\n";

