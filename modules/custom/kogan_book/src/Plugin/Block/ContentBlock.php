<?php

namespace Drupal\kogan_book\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
use Drupal\Core\core\modules\user\src\Form;
use \Drupal\Core\Form\FormBase;
use Drupal\block\Entity\Block;

/**
 * Provides conten block
 *
 * @Block(
 *   id = "content_block",
 *   admin_label = @Translation("Content block"),
 * )
 */
class ContentBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $x = 2.14*146 - 46;
    $x1 = 1.42*146 - 46;
    $x2 = 1.42*146 - 46;
    $y = 751 - 1.875*146;
    $y1 = 751 - 1.25*146;
    $y2 = 751 - 1.875*146;
    $z1 = 3*146 - 46;
    $z2 = 751 - 3*146;
    return array(
      '#theme' => 'content_block',
      '#items' => $x,
      '#items1' => $x1,
      '#items2' => $x2,
      '#itemsy' => $y,
      '#itemsy1' => $y1,
      '#itemsy2' => $y2,
      '#itemsz1' => $z1,
      '#itemsz2' => $z2,
    );
  }

}