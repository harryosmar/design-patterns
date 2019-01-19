<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace Sample\Tests\unit;

use Sample\CreationalPatterns\BuilderDesignPattern\HtmlPage\HTMLPageBuilder;

class BuilderDesignPatternTest extends Base {
  /**
   * @test
   */
  public function shouldBeAbleToGenerateHtmlPage() {
    $htmlPageBuilder = new HTMLPageBuilder();
    $htmlPageBuilder->setTitle('Testing the HTMLPage')
        ->setHeading('Heading')
        ->setText('text1')
        ->setText('text2')
        ->setText('text3');

    $htmlPage = $htmlPageBuilder->getPage();
    $htmlPage->formatPage();

    $this->assertEquals('<html><head><title>Testing the HTMLPage</title></head><body><h1>Heading</h1>text1text2text3</body></html>', $htmlPage->showPage());
  }
}