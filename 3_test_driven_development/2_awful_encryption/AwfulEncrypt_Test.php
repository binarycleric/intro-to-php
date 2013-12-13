<?php
require "./AwfulEncrypt.php";

class AwfulEncrypy_Test extends PHPUnit_Framework_TestCase {

  /**
   * @dataProvider testData
   */
  function testAwfulEncryption($clear, $expected) {
    $this->assertEquals($expected, awful_encrypt($clear));
  }

  /**
   * @dataProvider testData
   */
  function testAwfulDecryption($expected, $encrypted) {
    $this->assertEquals($expected, awful_decrypt($encrypted));
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
