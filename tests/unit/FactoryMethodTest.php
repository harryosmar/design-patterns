<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\Tests\unit;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\NullMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\NullPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks\OReillyMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks\OReillyPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks\SamsMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks\SamsPHPBook;
use Sample\CreationalPatterns\FactoryMethod\FactoryMethod;

class FactoryMethodTest extends Base {
  /**
   * @test
   */
  public function shouldBeAbleToGenerateBookUsingFactoryMethod() {
    $factoryMethod = new FactoryMethod();

    $this->assertInstanceOf(OReillyPHPBook::class, $factoryMethod->makePHPBook('OReilly'));
    $this->assertInstanceOf(OReillyMySQLBook::class, $factoryMethod->makeMySQLBook('OReilly'));
    $this->assertInstanceOf(SamsPHPBook::class, $factoryMethod->makePHPBook('sams'));
    $this->assertInstanceOf(SamsMySQLBook::class, $factoryMethod->makeMySQLBook('sams'));
    $this->assertInstanceOf(NullPHPBook::class, $factoryMethod->makePHPBook('404'));
    $this->assertInstanceOf(NullMySQLBook::class, $factoryMethod->makeMySQLBook('404'));
  }
}