<?php
try {
  include 'connect.php';

if (mysqli_query($conn, "INSERT INTO {$group_to_add} (person) VALUES ('{$name}')")){
  printf("Table row inserted\n");
  }

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
  echo $th;
  include 'error.html';
}


include 'addpeople.html';
exit();