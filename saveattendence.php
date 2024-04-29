<?php

$count = 1;
$arraycount = count($attended_users);
$array_of_names = array(); 
while($arraycount > $count){
    array_push($array_of_names, $attended_users[$count]);
    $count += 1;
}
try {
    include 'connect.php';

$sqlcount = 0;
while(count($array_of_names) > $sqlcount){
    $current_name = $array_of_names[$sqlcount];
    if (mysqli_query($conn, "INSERT INTO savedAttendence (groupattended, person, dateattended, attendend) VALUES 
    ('{$group_to_get}','{$current_name}', '2024-4-29', 1)")){
        printf("Table row inserted\n");
        }
        $sqlcount += 1;
}
// Run the create table query
//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'getattendence.html';
exit();