<?php

if(isset($_REQUEST['group'])){
  $group_to_add = htmlspecialchars($_REQUEST['group']);
  $name = htmlspecialchars($_REQUEST['person']);
  include 'addperson.php';
  exit();
  
}elseif(isset($_REQUEST['create'])){
  echo "works";
  $group_name = htmlspecialchars($_REQUEST['groupname']);
  include "creategroup.php";
  exit();

}else{
  include 'homepage.html';
  exit();
}

