<?php

use Drupal\Core\Template\Attribute;

/**
 * @file
 * Preprocessors and helper functions to make theming easier.
 */

function template_preprocess_views_view_custom_unformatted(&$variables) {
  $view = $variables['view'];
  $rows = $variables['rows'];
  $style = $view->style_plugin;
  $options = $style->options;

  $variables['default_row_class'] = !empty($options['default_row_class']);
  foreach ($rows as $id => $row) {
    $variables['rows'][$id] = array();
    $variables['rows'][$id]['content'] = $row;
    $variables['rows'][$id]['attributes'] = new Attribute();
    if ($row_class = $view->style_plugin->getRowClass($id)) {
      $variables['rows'][$id]['attributes']->addClass($row_class);
    }
  }
}