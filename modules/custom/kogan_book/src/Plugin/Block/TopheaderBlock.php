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
 * Implement block with brand
 * 
 * @Block(
 *  id = "top_header_block",
 *  admin_label = @Translation("Top header block"),
 * )
 */
class TopheaderBlock extends BlockBase {
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    
  }
  
}

