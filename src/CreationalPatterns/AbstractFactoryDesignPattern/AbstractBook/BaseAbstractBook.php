<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:47 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook;

abstract class BaseAbstractBook {
  /**
   * @var string
   */
  protected $subject;

  /**
   * @var string
   */
  protected $author;

  /**
   * @var string
   */
  protected $title;

  /**
   * @return string
   */
  public function getAuthor() {
    return $this->author;
  }

  /**
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getSubject() {
    return $this->subject;
  }
}