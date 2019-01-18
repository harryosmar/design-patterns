<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:48 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook;

abstract class AbstractMySQLBook extends BaseAbstractBook {
  /**
   * @var string
   */
  protected $subject = 'MySQL';
}