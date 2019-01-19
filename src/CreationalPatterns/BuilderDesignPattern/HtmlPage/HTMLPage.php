<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\CreationalPatterns\BuilderDesignPattern\HtmlPage;

class HTMLPage {

  /**
   * @var string
   */
  private $page;

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
   * HTMLPage constructor.
   *
   * @param string $page_title
   * @param string $page_heading
   * @param string $page_text
   */
  function __construct(string $page_title, string $page_heading, string $page_text) {
    $this->page_title   = $page_title;
    $this->page_heading = $page_heading;
    $this->page_text    = $page_text;
  }

  /**
   * @return string
   */
  function showPage() : string {
    return $this->page;
  }

  /**
   * @return void
   */
  function formatPage() {
    $this->page = '<html>';
    $this->page .= '<head><title>' . $this->page_title . '</title></head>';
    $this->page .= '<body>';
    $this->page .= '<h1>' . $this->page_heading . '</h1>';
    $this->page .= $this->page_text;
    $this->page .= '</body>';
    $this->page .= '</html>';
  }
}