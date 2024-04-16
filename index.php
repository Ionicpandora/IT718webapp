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
  $group = htmlspecialchars($_REQUEST['getgroup']);
  include 'getallgroup.php';

}else{
  include 'homepage.html';
  exit();
}

