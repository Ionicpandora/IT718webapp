<?php
try {
    $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "attendancetracker1-server.mysql.database.azure.com", "qivtdipzbu", "P$Oljub5Z2wAY4o8", "group", 3306, MYSQLI_CLIENT_SSL);

} catch (\Throwable $th) {
    include 'error.html';
}
