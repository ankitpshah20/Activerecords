<?php

class Manage{
  public static function autoload($class){
    include $class.'.php';
  }
}

spl_autoload_register(array('Manage','autoload'));


ini_set('display_errors', 'On');
error_reporting(E_ALL);

//require 'accounts.php';
$obj=new main();

class main{

  public function __construct(){
     echo 'Existing Accounts Records.<br>';
     accounts::findAll();
     echo '<br>';
	}
}
?>