<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:48 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern;

abstract class AbstractMySQLBook extends AbstractBook
{
    protected $subject = 'MySQL';
}