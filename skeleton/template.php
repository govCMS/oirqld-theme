<?php

function skeleton_preprocess_page(&$variables){


 
 
 
} //end function preprocess page


/** test **/
function skeleton_menu_link_alter(&$item) {
  if($item['menu_name'] == 'main-menu')
  {
    $item['expanded'] = 1;
  }
}
/** end test **/


//remove user name  from public search results
function skeleton_preprocess_search_result(&$vars) {
  
  //overwrite search results block form title
  $vars['form']['search_block_form']['label'] = '';
  
  //delete user display 
  $vars['info'] = "";
  $vars['info'] = $vars['info_split']['date'];
  #$vars['info'] = $vars['info_split']['user'];
}

function skeleton_preprocess_search_block_form(&$vars) {

}

// Implements hook_form_alter()
function skeleton_form_alter(&$form, &$form_state, $form_id) {
	  $form['search_block_form']['#title'] = t('S'); // Change the text on the label element

	if($form_id == 'search-block-form' OR $form_id == 'search-form'){
		print_r($form);
		$form['keys_1']['#attributes']['placeholder'] = 'Search ';
		$form['actions']['submit']['#value'] = t('Go'); // Change the text on the submit button
		$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/searchicon.png');
	}

}//end function hook form alter

function skeleton_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	$form['search_block_form']['#title'] = t('h'); // Change the text on the label element
	$form['search_block_form']['#attributes']['placeholder'] = t('Search website'); 
	$form['actions']['submit']['#value'] = t(''); // Change the text on the submit button
	#$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/searchicon.png');
}

//adds the bootstrap class to the main menu ul top navbar
function skeleton_menu_tree__main_menu($variables) {
  return '<ul class="navbar-nav mr-auto first-sidebar" id="main-menu-links">' . $variables['tree'] . '</ul>';
}


/*
/** add classes to submenu level drupal */
#function hook_menu_link__main_menu($variables)
/*
function oircorp_menu_link__main_menu($variables){
 
$element = $variables['element'];
$sub_menu = '';
  
  if ($element['#below']) {
    // Prevent dropdown functions from being added to management menu so it
    // does not affect the navbar module.
    if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    } elseif ((!empty($element['#original_link']['depth'])) && $element['#original_link']['depth'] > 1) {
      // Add our own wrapper.
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
      $element['#attributes']['class'][] = 'dropdown-submenu';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    } else {
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
      $element['#title'] .= ' <span class="caret"></span>';
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }
  }
  if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
    $element['#attributes']['class'][] = 'active';
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";

}//end function
*/




?>