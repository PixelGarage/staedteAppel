<?php
/**
 * Created by PhpStorm.
 * User: ralph
 * Date: 06.02.15
 * Time: 17:23
 */

/**
 * Preprocess variables for the html template.
 */
function pixelgarage_preprocess_html(&$vars) {
  // make sure jQuery UI and effects is loaded for anonymous users
  drupal_add_library('system', 'ui');
  drupal_add_library('system', 'effects');

}

/**
 * Override or insert variables for the page templates.
 */
function pixelgarage_preprocess_page(&$vars) {
  // hide titles on login forms
  pg_login_preprocess_page($vars);

  $vars['page_subtitle'] = t('Komitee «FinanzdirektorInnen, Stadtpräsidien und Stadtregierungen gegen die USR III»');
}


function pixelgarage_preprocess_views_view_proximity(&$vars) {
  global $language;

  $vars['donate_title'] = t('Donate');
  $vars['donate_text'] = t('Unterstütze unsere Kampagne!');
  switch ($language->language) {
    case 'de':
    default:
      $vars['donate_url'] = 'node/21';
      break;
    case 'fr':
      $vars['donate_url'] = 'node/22';
      break;
  }
}
