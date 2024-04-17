<?php
try {
  $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', 'IT09123@dmin', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$group = $group_to_add;
$person = $name;
if ($stmt = mysqli_prepare($conn, "INSERT INTO {$group} (person) VALUES (?)")) {
mysqli_stmt_bind_param($stmt, 'ssd', $person);
mysqli_stmt_execute($stmt);
printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
mysqli_stmt_close($stmt);
}

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
  echo $th;
  include 'error.html';
}


include 'addpeople.html';
exit();