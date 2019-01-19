<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\CreationalPatterns\BuilderDesignPattern\HtmlPage;

use Sample\CreationalPatterns\BuilderDesignPattern\AbstractPageBuilder;

class HTMLPageBuilder extends AbstractPageBuilder {
  /**
   * @var string
   */
  private $page_title;

  /**
   * @var string
   */
  private $page_heading;

  /**
   * @var string
   */
  private $page_text;

  /**
   * @param string $title_in
   *
   * @return $this
   */
  public function setTitle(string $title_in) {
    $this->page_title .= $title_in;

    return $this;
  }

  /**
   * @param string $heading_in
   *
   * @return $this
   */
  public function setHeading(string $heading_in) {
    $this->page_heading .= $heading_in;

    return $this;
  }

  /**
   * @param string $text_in
   *
   * @return $this
   */
  public function setText(string $text_in) {
    $this->page_text .= $text_in;

    return $this;
  }

  /**
   * @return HTMLPage
   */
  public function getPage() {
    return new HTMLPage($this->page_title, $this->page_heading, $this->page_text);
  }
}