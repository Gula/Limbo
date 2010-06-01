Limbo
=====

Sandbox extended - Symfony 1.4


h2. Submodules

* symfony core 1.4
* sfDoctrineGuardPlugin
* sfDoctrineMooDooPlugin
* sfLessPhpPlugin
* sfFormExtraPlugin
* sfTCPDFPlugin
* sfImageTransformPlugin


h2. Install

h3. Clone

git clone git://github.com/Gula/Limbo.git

h3. Init and update submodules.

git submodule init
git submodule update

h3. Activate pluggins in ProjectConfiguration.class.php file.


      'sfDoctrinePlugin',
//      'sfDoctrineGuardPlugin',
//      'sfDoctrineMooDooPlugin',
//      'sfLessPhpPlugin',
//      'sfFormExtraPlugin',
//      'sfTCPDFPlugin',
//      'sfImageTransformPlugin',
//      'sfMooDooGalleryPlugin'

h3. Publish web assets for all plugins

./symfony plugin:publish-assets

h3. Add all permissions to cache and log folders.

chmod 777 cache/ log/ -R

h3. create DB and config conection.

You can use databases.yml.mysql or databases.yml.sqlite template

h3. Build all, and load data.

./symfony doctrine:build --all --and-load

h4. VirtualHost example

Listen *:88
<VirtualHost *:88>
  DocumentRoot "/var/www/Limbo"
  DirectoryIndex index.php
  <Directory "/var/www/Limbo/web">
    AllowOverride All
    Allow from All
  </Directory>
</virtualHost>