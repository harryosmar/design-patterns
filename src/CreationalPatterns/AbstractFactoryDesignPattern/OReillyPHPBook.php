<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:53 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern;

class OReillyPHPBook extends AbstractPHPBook
{
    public function __construct()
    {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title = 'Programming PHP';
    }
}