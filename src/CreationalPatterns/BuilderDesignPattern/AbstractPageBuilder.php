<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\CreationalPatterns\BuilderDesignPattern;

abstract class AbstractPageBuilder {
  /**
   * @return mixed
   */
  abstract public function getPage();
}