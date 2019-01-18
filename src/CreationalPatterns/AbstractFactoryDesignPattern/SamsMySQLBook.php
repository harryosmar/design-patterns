<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 12:01 PM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern;

class SamsMySQLBook extends AbstractMySQLBook
{
    public function __construct()
    {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }
}