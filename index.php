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
     echo 'Creating new id 26 in accounts table.<br>';
     $record = new account();
     $record->id='';
     $record->email='jbl@gmail.com';
     $record->fname='jbl';
     $record->lname='qpz';
     $record->phone='975-535-5019';
     $record->birthday='2001-07-06';
     $record->gender='male';
     $record->password='125445';
     //$record->save();
     echo 'After adding record.<br>';
     accounts::findAll();
     echo '<br>';
  
      echo 'Searching new created id 26 in accounts table.<br>';
     $id=26;
     accounts::findOne($id);
     
     echo '<br>'
     echo 'updating details of id=26.<br>';
     $record = new account();
     $record->id=26;
     $record->email='skl@gmail.com';
     $record->fname='qeq';
     $record->lname='kkl';
     $record->phone='923-345-1111';
     $record->birthday='1999-08-03';
     $record->gender='male';
     $record->password='12367';
     $record->save();
     echo 'After update.<br>';
     accounts::findOne($id);
     echo '<br>';
  //print_r($record1);
    
	}
}
?>