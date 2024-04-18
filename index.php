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
  $attended_users = $_REQUEST;
print_r($attended_users);
  include 'saveattendence.php';
  exit();

}elseif(isset($_REQUEST['viewgroup'])){
  $viewgroup = htmlspecialchars($_REQUEST['viewgroup']);
  include 'getattendencerecords.php';

}else{
  include 'homepage.html';
  exit();
}

