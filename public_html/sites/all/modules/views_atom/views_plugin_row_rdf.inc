<?php

/**
 * @file
 * Contains the RDF row style plugin.
 */

/**
 * Plugin which performs a node_view on the resulting object
 * and formats it as an RSS item.
 */
class views_plugin_row_rdf extends views_plugin_row {
  // Basic properties that let the row style follow relationships.
  var $base_table = 'node';
  var $base_field = 'nid';

  function render($row) {
    // For the most part, this code is taken from node_feed() in node.module
    global $base_url;

    $nid = $row->{$this->field_alias};
    if (!is_numeric($nid)) {
      return;
    }

    // @todo, Please change this theme call to use an associative array for the $variables parameter.
    return theme($this->theme_functions(), $this->view, $this->options, $row);
  }
}

