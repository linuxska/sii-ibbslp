<?php

require_once '/home4/abricola/php/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->setWebDir($this->getRootDir().'/public_html');
    $this->enablePlugins('sfPropelPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfGuardPlugin');
    $this->enablePlugins('sfGuardExtraPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
