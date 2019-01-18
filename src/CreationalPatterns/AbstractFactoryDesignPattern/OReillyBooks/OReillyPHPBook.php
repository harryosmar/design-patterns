<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:53 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;

class OReillyPHPBook extends AbstractPHPBook {
  /**
   * OReillyPHPBook constructor.
   */
  public function __construct() {
    $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
    $this->title  = 'Programming PHP';
  }
}