<?php
/**
 * Craft CMS plugin for Kint debugging
 **
 * @author    Agency Leroy
 * @copyright Copyright (c) 2018 Agency Leroy
 * @link      https://agencyleroy.com
 * @package   Kint
 * @since     1.0.0
 */

namespace agencyleroy\craftkint;

use Craft;
use craft\base\Plugin;
use Kint\Twig\TwigExtension;

class CraftKint extends Plugin {

  public function init() {
    parent::init();

    if (Craft::$app->request->getIsSiteRequest()) {
      $kint = new TwigExtension();
      Craft::$app->view->registerTwigExtension($kint);
    }
  }

}
