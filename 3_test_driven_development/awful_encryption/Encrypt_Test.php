<?php
require "./encrypt.php";

class EncrypyTest extends PHPUnit_Framework_TestCase {

  /**
   * @dataProvider testData
   */
  function testAwfulEncryption($clear, $expected) {
    $this->assertEquals($expected, encrypt($clear));
  }

  /**
   * @dataProvider testData
   */
  function testAwfulDecryption($expected, $encrypted) {
    $this->assertEquals($expected, decrypt($encrypted));
  }

  function testData() {
    return array(
      array('test', 'iKgi'),
      array('php', 'aQa'),
      array('python', 'asiQ_]'),
      array('javascript', 'UCmCgGeSai'),
    );
  } 

}
