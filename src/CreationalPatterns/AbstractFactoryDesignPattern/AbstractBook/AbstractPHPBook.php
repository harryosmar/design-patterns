<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/18/19
 * Time: 11:51 AM
 */

namespace Sample\CreationalPatterns\AbstractFactoryDesignPattern\AbstractBook;

abstract class AbstractPHPBook extends BaseAbstractBook {
  /**
   * @var string
   */
  protected $subject = 'PHP';
}