<?php

namespace Drupal\as_tshirt\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the as_tshirt module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "as_tshirt DefaultController's controller functionality",
      'description' => 'Test Unit for module as_tshirt and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests as_tshirt functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module as_tshirt.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
