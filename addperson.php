<?php
try {
  $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', 'IT09123@dmin', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if (mysqli_query($conn, "
INSERT INTO {$group_name} (id, person) VALUES ('{$name}');
")) {
printf("Person added to table\n");
}
//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
  echo $th;
  include 'error.html';
}


include 'addpeople.html';
exit();