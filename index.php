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

}else{
  include 'homepage.html';
  exit();
}

