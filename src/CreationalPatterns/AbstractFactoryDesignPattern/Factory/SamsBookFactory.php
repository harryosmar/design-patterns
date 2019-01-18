<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:44 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory;

use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsMySQLBook;
use Sample\CreationalPatterns\AbstractFactoryDesignPattern\SamsPHPBook;

class SamsBookFactory extends AbstractBookFactory
{
    public function makePHPBook()
    {
        return new SamsPHPBook;
    }

    public function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}