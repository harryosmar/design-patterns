<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:47 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern;

abstract class AbstractBook
{
    protected $subject;

    protected $author;

    protected $title;

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSubject()
    {
        return $this->subject;
    }
}