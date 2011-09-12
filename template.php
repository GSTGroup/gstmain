<?php
// $Id:$

/**
 * ABOUT
 *
 *  The template.php file is one of the most useful files when creating or modifying Drupal themes.
 *  You can add new regions for block content, modify or override Drupal's theme functions,
 *  intercept or make additional variables available to your theme, and create custom PHP logic.
 *  For more information, please visit the Theme Developer's Guide on Drupal.org:
 *  http://api.drupal.org/api/drupal
 */

/* ONLY LEAVE THIS HERE DURING DEV */
  // drupal_theme_rebuild(); drupal_set_message("Rebuilding Theme Registry");
  // menu_rebuild(); drupal_set_message("Rebuild Menus");
/* REMOVE ABOVE FOR PRODUCTION */

/**
 * Include Files
 *
 */
//include_once './' . drupal_get_path('theme', 'gstmain') . '/template.display-forms.inc';


function gstmain_preprocess_html(&$variables) {
  drupal_add_css(path_to_theme() . '/style.ie6.css', 
      array(
        'group' => CSS_THEME, 
        'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 
        'preprocess' => FALSE)
      );
}

/**
 * Implementation of hook_theme()
 */
function gstmain_theme($existing, $type, $theme, $path) {
  // return an array of FORMs to use to override built-ins
  // key = FORM name
  // value = array of arguments for the FORM
  // see: api hook_theme for details
  include_once './' . drupal_get_path('theme', 'gstmain') . '/template.theme-registry.inc';
  return _gstmain_theme($existing, $type, $theme, $path);
  //return array();
}

function gstmain_preprocess_node(&$vars) {
  if (isset($vars['node'])) {   
   // This works, but it replaces the entire PAGE, not just the node portion
   //$vars['theme_hook_suggestion'] = 'node__'. str_replace('_', '--', $vars['node']->type) . '__edit';
  }
}

function gstmain_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
  // If the node type is "blog" the template suggestion will be "page--blog.tpl.php".
  // $vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
   
   // This works, but it replaces the entire PAGE, not just the node portion
   //$vars['theme_hook_suggestions'][] = 'node__'. str_replace('_', '--', $vars['node']->type) . '__edit';
  }
}