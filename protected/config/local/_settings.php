<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'connectionString' => 'mysql:host=85.17.73.180;dbname=medlibro_cba_pl',
      'username' => 'adminmedlibro',
      'password' => 'Atechno1',
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
        'installer_hostname' => 'mysql.cba.pl',
        'installer_database' => 'medlibro_cba_pl',
      ),
    ),
    'installed' => true,
  ),
  'name' => 'MedLi',
  'language' => 'pl',
  'theme' => 'HumHub',
); ?>