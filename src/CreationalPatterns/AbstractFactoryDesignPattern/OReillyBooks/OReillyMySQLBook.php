<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 12:02 PM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;

class OReillyMySQLBook extends AbstractMySQLBook {
  /**
   * OReillyMySQLBook constructor.
   */
  public function __construct() {
    $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
    $this->title  = 'Managing and Using MySQL';
  }
}