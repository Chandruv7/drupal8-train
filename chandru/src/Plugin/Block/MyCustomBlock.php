<?php
/**
*@file
* A custom block
*/

namespace Drupal\chandru\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * provides a 'next previous' block
 * @Block(
 * id="my_custom_block_demo",
 * admin_label= @Translation("My Custom Block"),
 * category = @Translation("Blocks")
 *)
 */
class MyCustomBlock extends BlockBase {
     
    public function build() {
        return array('#markup' => 'hello world' );
    }

}