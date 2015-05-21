<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'connectionString' => 'mysql:host=sql5.freemysqlhosting.net;dbname=sql578137',
      'username' => 'sql578137',
      'password' => 'nT4!xV1%',
    ),
    'cache' => 
    array (
      'class' => 'CFileCache',
    ),
    'user' => 
    array (
    ),
    'mail' => 
    array (
      'class' => 'ext.yii-mail.YiiMail',
      'transportType' => 'php',
      'viewPath' => 'application.views.mail',
      'logging' => true,
      'dryRun' => false,
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'sql5.freemysqlhosting.net',
        'installer_database' => 'sql578137',
      ),
    ),
    'installed' => true,
  ),
  'name' => 'MedLibro',
  'language' => 'pl',
  'theme' => 'HumHub',
); ?>