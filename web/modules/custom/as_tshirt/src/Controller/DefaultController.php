<?php

namespace Drupal\as_tshirt\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\as_tshirt\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Listingpage.
   *
   * @return string
   *   Return Hello string.
   */
  public function listingPage() {

    return [
		'#theme' => 'tshirt_list',
		'tshirts' => ['T-shirt 1','T-shirt 2','T-shirt 3'],
    ];
  }

}
