<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:44 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory\AbstractBookFactory;

class SamsBookFactory extends AbstractBookFactory {
  /**
   * @return AbstractPHPBook
   */
  public function makePHPBook() : AbstractPHPBook{
    return new SamsPHPBook;
  }

  /**
   * @return AbstractMySQLBook
   */
  public function makeMySQLBook() : AbstractMySQLBook {
    return new SamsMySQLBook;
  }
}