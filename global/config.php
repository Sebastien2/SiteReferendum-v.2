<?php
define('SQL_DSN', 'mysql:dbname=**************;host=*************');
define('SQL_USERNAME', '**********');
define('SQL_PASSWORD', '**********');

$module=(empty($module)) ? !empty($_GET['module']) ? $_GET['module'] : 'index' :$module;

define('CHEMIN_VUE', 'modules/'.$module.'/vues/');
define('CHEMIN_MODELE', 'modeles/'.$module.'/');
define('CHEMIN_CONTROLEUR', 'modules/'.$module.'/controleur/');
define('CHEMIN_JS', 'modules/'.$module.'/js/');
define('CHEMIN_LIB', 'libs/');

define('CHEMIN_DEBUT', '');

?>
