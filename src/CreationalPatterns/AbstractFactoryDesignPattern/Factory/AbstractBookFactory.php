<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:26 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\Factory;

abstract class AbstractBookFactory
{
    public abstract function makePHPBook();

    public abstract function makeMySQLBook();
}