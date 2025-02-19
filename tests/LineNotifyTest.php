<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/LineNotify.php';

/**
 * @property KS\Line\LineNotify LineNotify
 */
class LineNotifyTest extends PHPUnit_Framework_TestCase {

  private $LineNotify;
  private $token = 'T4YdTbXO3tHaed3L5Uf3z8Udf5qSOQGgaWFDxUPS7Qm';

  public function __construct() {
    $this->LineNotify = new KS\Line\LineNotify($this->token);
  }

  public function testGetToken() {
    $result = $this->LineNotify->getToken();
    $this->assertEquals($this->token, $result);
  }

  public function testSetToken() {
    $token = 'T4YdTbXO3tHaed3L5Uf3z8Udf5qSOQGgaWFDxUPS7Qm';
    $this->LineNotify->setToken($token);
    $result = $this->LineNotify->getToken();
    $this->assertEquals($token, $result);
  }

  public function testUrlApi() {
    $expected = 'https://notify-api.line.me/api/notify';
    $this->assertEquals($expected, KS\Line\LineNotify::API_URL);
  }

}
