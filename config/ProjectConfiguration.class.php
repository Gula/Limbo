<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(
      'sfDoctrinePlugin',
<<<<<<< HEAD:config/ProjectConfiguration.class.php
      'sfFormExtraPlugin',
      'sfDoctrineGuardPlugin',
      'sfLessPhpPlugin',
      //'sfImageTransformPlugin',
      //'sfDoctrineJCroppablePlugin',
      //'sfMooDooGalleryPlugin',
      'sfDoctrineMooDooPlugin'
    
=======
      'sfDoctrineGuardPlugin',
      'sfDoctrineMooDooPlugin',
//      'sfLessPhpPlugin',
//      'sfFormExtraPlugin',
//      'sfTCPDFPlugin',
      'sfImageTransformPlugin',
      'sfMooDooGalleryPlugin'
>>>>>>> 17ef5c46e5bef215d27edb1035336323e4129c9c:config/ProjectConfiguration.class.php
    );
  }
}
