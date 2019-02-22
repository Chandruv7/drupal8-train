<?php

namespace Drupal\block\Controller;

use Drupal\examples\Utility\DescriptionTemplateTrait;

/**
 * Controller routines for block example routes.
 */
class BlockController {
  use DescriptionTemplateTrait;

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'block';
  }

}
