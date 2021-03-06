<?php
/**
 * @file
 * dgu_glossary.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dgu_glossary_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function dgu_glossary_node_info() {
  $items = array(
    'suggested_definition' => array(
      'name' => t('Suggested definition'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'suggested_term' => array(
      'name' => t('Suggested term'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
