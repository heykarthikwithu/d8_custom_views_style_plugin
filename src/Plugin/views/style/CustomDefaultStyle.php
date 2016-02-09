<?php

/**
 * @file
 * Contains \Drupal\custom\Plugin\views\style\CustomDefaultStyle.
 */

namespace Drupal\custom\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Custom Unformatted style plugin to render rows one after another with no
 * decorations.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "custom_default",
 *   title = @Translation("Custom Unformatted list"),
 *   help = @Translation("Displays rows one after another."),
 *   theme = "views_view_custom_unformatted",
 *   display_types = {"normal"}
 * )
 */
class CustomDefaultStyle extends StylePluginBase {

  /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

}
