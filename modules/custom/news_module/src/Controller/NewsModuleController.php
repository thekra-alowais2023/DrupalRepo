<?php

namespace Drupal\news_module\Controller;
use Drupal\Core\Controller\ControllerBase;


class NewsModuleController extends ControllerBase{

  public function view() {

    $items = array(
      array('name' => 'Develop video games'),
      array('name' => 'Publish latest games updates'),
      array('name' => 'Publish games hacks'),
    );

    return array(
      '#theme' => 'news_list',
      '#items' => $items,
      '#title' => 'About Us!'
    );

  }
}