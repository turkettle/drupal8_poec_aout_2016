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

	$query = \Drupal::entityQuery('node');
	$query->condition('type', 'tshirt');
	$query->condition('status', 1);
	$query->sort('created', 'DESC');
	$result = $query->execute();

	$nodes = \Drupal\node\Entity\Node::loadMultiple($result);

	$tshirts = [];
	foreach ($nodes as $node) {
		$node_teaser = node_view($node, 'teaser');
		$tshirts[] = $node_teaser;
	}

    return [
		'#theme' => 'tshirt_list',
		'tshirts' => $tshirts,
    ];
  }

}
