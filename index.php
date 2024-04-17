<?php

if(isset($_REQUEST['group'])){
  $group_to_add = htmlspecialchars($_REQUEST['group']);
  $name = htmlspecialchars($_REQUEST['person']);
  include 'addperson.php';
  exit();

}elseif(isset($_REQUEST['create'])){
  $group_name = htmlspecialchars($_REQUEST['groupname']);
  include 'addgroup.php';
  exit();

}elseif(isset($_REQUEST['getgroup'])){
  $group_to_get = htmlspecialchars($_REQUEST['getgroup']);
  include 'getallgroup.php';
  exit();
  
}elseif(isset($_REQUEST['completeattendence'])){
  print_r($_REQUEST);
  //include 'saveattendence.php';
  include 'doattendence.html';
  exit();

}elseif(isset($_REQUEST['viewgroup'])){
  $viewgroup = htmlspecialchars($_REQUEST['viewgroup']);
  include 'getattendencerecords.php';

}else{
  include 'homepage.html';
  exit();
}

