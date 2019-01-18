<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:26 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;

abstract class AbstractBookFactory {
  /**
   * @return AbstractPHPBook
   */
  public abstract function makePHPBook() : AbstractPHPBook;

  /**
   * @return AbstractMySQLBook
   */
  public abstract function makeMySQLBook() : AbstractMySQLBook;
}