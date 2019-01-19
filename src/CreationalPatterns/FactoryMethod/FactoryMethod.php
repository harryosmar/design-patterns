<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\CreationalPatterns\FactoryMethod;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\NullMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\NullPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks\OReillyMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks\OReillyPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks\SamsMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks\SamsPHPBook;

class FactoryMethod extends AbstractFactoryMethod {
  /**
   * @param string $param
   *
   * @return AbstractPHPBook
   */
  function makePHPBook(string $param) : AbstractPHPBook {
    switch ($param) {
      case "OReilly":
        return new OReillyPHPBook();
        break;
      case "sams":
        return new SamsPHPBook();
        break;
      default:
        return new NullPHPBook();
        break;
    }
  }

  /**
   * @param string $param
   *
   * @return AbstractMySQLBook
   */
  function makeMySQLBook(string $param) : AbstractMySQLBook {
    switch ($param) {
      case "OReilly":
        return new OReillyMySQLBook();
        break;
      case "sams":
        return new SamsMySQLBook();
        break;
      default:
        return new NullMySQLBook();
        break;
    }
  }
}