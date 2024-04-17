<?php

try {
    $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', 'IT09123@dmin', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Run the create table query
if ($results = mysqli_query($conn, "
SELECT * FROM {$viewgroup} WHERE group={$viewgroup};
")) {
printf("attendence saved\n");
}

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'viewattendence.html.php';
exit();