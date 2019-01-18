<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 12:02 PM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern;

class OReillyMySQLBook extends AbstractMySQLBook
{
    public function __construct()
    {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }
}