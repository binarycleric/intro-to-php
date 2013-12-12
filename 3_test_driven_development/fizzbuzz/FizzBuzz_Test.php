<?php
require "./FizzBuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

  function testNumeric() {
    $this->assertEquals(1, fizz_buzz(1));
  }

  function testFizz() {
    $this->assertEquals("fizz", fizz_buzz(3));
  }

  function testBuzz() {
    $this->assertEquals("buzz", fizz_buzz(5));
  }

  function testFizzBuzz() {
    $this->assertEquals("fizzbuzz", fizz_buzz(15));
  }

}
