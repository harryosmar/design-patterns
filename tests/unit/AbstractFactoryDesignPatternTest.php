<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\Tests\unit;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook\AbstractPHPBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyBooks\OReillyBookFactory;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsBooks\SamsBookFactory;

class AbstractFactoryDesignPatternTest extends Base {
  /**
   * @test
   */
  public function shouldBeAbleToGenerateOReillyBookUsingFactory() {
    $oReillyBookFactory = new OReillyBookFactory();
    $oReillyPhpBook     = $oReillyBookFactory->makePHPBook();
    $oReillyMysqlBook   = $oReillyBookFactory->makeMySQLBook();

    $this->assertInstanceOf(AbstractPHPBook::class, $oReillyPhpBook);
    $this->assertInstanceOf(AbstractMySQLBook::class, $oReillyMysqlBook);
    $this->assertEquals('PHP', $oReillyPhpBook->getSubject());
    $this->assertEquals('Rasmus Lerdorf and Kevin Tatroe', $oReillyPhpBook->getAuthor());
    $this->assertEquals('MySQL', $oReillyMysqlBook->getSubject());
    $this->assertEquals('George Reese, Randy Jay Yarger, and Tim King', $oReillyMysqlBook->getAuthor());
  }

  /**
   * @test
   */
  public function shouldBeAbleToGenerateSamsBookUsingFactory() {
    $samsBookFactory = new SamsBookFactory();
    $samsPhpBook     = $samsBookFactory->makePHPBook();
    $samsMysqlBook   = $samsBookFactory->makeMySQLBook();

    $this->assertInstanceOf(AbstractPHPBook::class, $samsPhpBook);
    $this->assertInstanceOf(AbstractMySQLBook::class, $samsMysqlBook);
    $this->assertEquals('PHP', $samsPhpBook->getSubject());
    $this->assertEquals('George Schlossnagle', $samsPhpBook->getAuthor());
    $this->assertEquals('MySQL', $samsMysqlBook->getSubject());
    $this->assertEquals('Paul Dubois', $samsMysqlBook->getAuthor());
  }
}