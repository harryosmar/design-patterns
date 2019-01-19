<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:41 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory\AbstractBookFactory;

class OReillyBookFactory extends AbstractBookFactory {
  /**
   * @return AbstractPHPBook
   */
  public function makePHPBook() : AbstractPHPBook {
    return new OReillyPHPBook;
  }

  /**
   * @return AbstractMySQLBook
   */
  public function makeMySQLBook() : AbstractMySQLBook {
    return new OReillyMySQLBook;
  }
}