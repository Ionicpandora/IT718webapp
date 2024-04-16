<?php
try {
$host = 'attendencetracker1.mysql.database.azure.com';
$username = 'qivtdipzbu';
$password = 'IT09123@dmin';
$db_name = 'group';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Run the create table query
if (mysqli_query($conn, '
CREATE TABLE Products (
`Id` INT NOT NULL AUTO_INCREMENT ,
`person` VARCHAR(225),
`Price` DOUBLE NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'addclass.html';
exit();