<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\CreationalPatterns\FactoryMethod;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;

abstract class AbstractFactoryMethod {
  /**
   * @param string $param
   *
   * @return AbstractPHPBook
   */
  abstract function makePHPBook(string $param) : AbstractPHPBook;

  /**
   * @param string $param
   *
   * @return AbstractMySQLBook
   */
  abstract function makeMySQLBook(string $param) : AbstractMySQLBook;
}