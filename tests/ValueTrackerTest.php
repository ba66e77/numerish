<?php
/**
 * Created by PhpStorm.
 * User: barrett
 * Date: 3/17/16
 * Time: 8:36 PM
 */

namespace ba66e77\numerish;


class ValueTrackerTest extends \PHPUnit_Framework_TestCase {

  /**
   * @expectedException UnexpectedValueException
   */
  public function testValueRefusesString() {
      $tracker = new ValueTracker('dog');
  }
}
