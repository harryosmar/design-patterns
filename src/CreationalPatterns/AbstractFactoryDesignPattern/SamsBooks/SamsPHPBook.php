<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:59 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;

class SamsPHPBook extends AbstractPHPBook {
  /**
   * SamsPHPBook constructor.
   */
  public function __construct() {
    $this->author = 'George Schlossnagle';
    $this->title  = 'Advanced PHP Programming';
  }
}