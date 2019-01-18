<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 12:01 PM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;

class SamsMySQLBook extends AbstractMySQLBook {
  /**
   * SamsMySQLBook constructor.
   */
  public function __construct() {
    $this->author = 'Paul Dubois';
    $this->title  = 'MySQL, 3rd Edition';
  }
}