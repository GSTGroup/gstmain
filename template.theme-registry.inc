<?php
// $Id:$

/**
 * @file
 * Contains infrequently used theme registry build functions.
 */

/**
 * Implements HOOK_theme().
 *
 *
 * @param $existing
 *   An array of existing implementations that may be used for override purposes.
 * @param $type
 *   What 'type' is being processed.
 * @param $theme
 *   The actual name of theme that is being being checked.
 * @param $path
 *   The directory path of the theme or module, so that it doesn't need to be looked up.
 */
function _gstmain_theme(&$existing, $type, $theme, $path) {
  global $user;
  $reg = array();
  
//  $reg['contact_mail_page'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'contact-form',
//    );

//    $reg['pmcontact_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-pmcontact-edit'
//    );

//    $reg['gstcourse_node_form'] = array(
//      'arguments' => array(
//          'form' => NULL,
//      ),
//      'template' => 'node-gstcourse-edit',
//      'render element' => 'elements',
//      'preprocess functions' => array('template_preprocess','template_preprocess_node'),
//      );

  
    $reg['gstcourse_node_form'] = array(
      'template' => 'node-gstcourse-edit',
      'render element' => 'form',      
      'path' => drupal_get_path('theme', 'gstmain') . '/templates',
      );
       
//    $reg['gstlesson_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-gstlesson-edit'
//    );
//
    $reg['gstgroup_node_form'] = array(
      'template' => 'node-gstgroup-edit',
      'render element' => 'form',      
      'path' => drupal_get_path('theme', 'gstmain') . '/templates',
    );
//
//    $reg['gstquestion_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-gstquestion-edit'
//    );
//
//
//    // User Registration
//    $reg['user_register'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'user-register-edit'
//    );
//    
//    // Contact Profile
//    $reg['profile_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-profile-edit'
//    );

    // THIS Entry is for bgs_helper_bgsinventran_dataentry_form() - in order for it to be used,
    // any $form[] must set: '#theme' => 'node-bgsinventran-dataentry'
    //
//    $reg['node-bgsinventran-dataentry'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-bgsinventran-dataentry'
//    );
//
//    $reg['bgsinventranitem_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'node-bgsinventranitem-edit'
//    );

        
    return $reg;
}

?>
