<?php
// $Id:$

// Available Variables:
//  $form: The form to display (can be called with $drupal_render_children($form) 
//    to convert to HTML
//  $zebra: If this is ina  "list" is it 'odd' or 'even'
//  $classes_array: Array of Classes to be applied
//  $id: Row # (starts at 1)
//  $user: Logged in user Object
//  $is_admin: True/False - is the $user the Admin?
//  $logged_in: True/False - is the $user logged in?
//  $is_front: True/False - is this being displayed on the front page?

$is_new = (empty($form['nid']['#value']));
$langcode = $form['language']['#value'];
hide($form['actions']);
?>

<div class="node-add-wrapper clear-block">
  <div class="node-column-main">
    <?php if($form): ?>    
      <?php print drupal_render_children($form); ?>
    <?php endif; ?>
   
    <?php if(!empty($form['actions'])): ?>
      <div class="node-buttons">
        <?php print render($form['actions']); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="clear"></div>
</div>


