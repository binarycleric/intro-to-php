<?php

// Classes are similar to classes in Ruby except that they cannot be nested 
// within each other. Classes can however live within modules but the same rules 
// apply.
class Speaker {

  public function sayHello() {
    echo "Hello World!\n";
  }

  // if scope is not specified it's public by default.
  function sayGoodbye() {
    echo "Goodbye!\n";
  }

}

$speaker = new Speaker();
$speaker->sayHello();
$speaker->sayGoodbye();
