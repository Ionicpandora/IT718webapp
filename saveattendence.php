<?php

$count = 1;
$arraycount = count($attended_users);
echo $arraycount;
echo $attended_users[1];
echo $attended_users[2];
echo $attended_users[3];
$array_of_names = array(); 
while($arraycount < $count){
    array_push($array_of_names, $attended_users[$count]);
    $count += 1;
}

print_r($array_of_names);
try {
    $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', 'IT09123@dmin', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


// Run the create table query
if ($results = mysqli_query($conn, "
SELECT * FROM {$group_to_get};
")) {
printf("attendence saved\n");
}

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'getattendence.html';
exit();