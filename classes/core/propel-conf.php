<?php
// This file generated by Propel 1.3.0 convert-props target
// from XML runtime conf file C:\xampp5\htdocs\itconcept\schema\runtime-conf.xml
return array_merge_recursive(array (
  'log' => 
  array (
    'name' => 'logs/propel.log',
    'ident' => '',
    'level' => '3',
  ),
  'propel' => 
  array (
    'datasources' => 
    array (
      'database' => 
      array (
        'adapter' => 'mysql',
        'connection' => 
        array (
          'dsn' => 'mysql:dbname=itconcept;host=localhost',
          'options' => 
          array (
            'ATTR_PERSISTENT' => 
            array (
              'value' => true,
            ),
          ),
          'attributes' => 
          array (
            'ATTR_EMULATE_PREPARES' => 
            array (
              'value' => true,
            ),
          ),
          'user' => 'root',
          'password' => '1234',
        ),
      ),
      'default' => 'database',
    ),
    'generator_version' => '1.3.0',
  ),
), include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'propel-classmap.php'));