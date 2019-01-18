<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:41 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\OReillyPHPBook;

class OReillyBookFactory extends AbstractBookFactory
{

    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }

    public function makeMySQLBook()
    {
        return new OReillyMySQLBook;
    }
}