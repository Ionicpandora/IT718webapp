<?php
try {
    $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "attendencetracker1.mysql.database.azure.com", "qivtdipzbu", "IT09123@dmin", "group", 3306, MYSQLI_CLIENT_SSL);

} catch (\Throwable $th) {
    include 'error.html';
}
