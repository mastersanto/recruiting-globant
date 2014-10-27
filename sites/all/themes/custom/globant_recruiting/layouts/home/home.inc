<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Home Layout'),
  'category' => t('Globant'),
  'icon' => 'home.png',
  'theme' => 'panels_home',
  'css' => 'home.css',
  'regions' => array(
      'row1' => t('Row 1'),
      'row2' => t('Row 2'),
      'row3' => t('Row 3'),
      'row4' => t('Row 4'),
  ),
);
