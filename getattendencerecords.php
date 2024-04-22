<?php

try {
    include 'connect.php';
    
// Run the create table query
if ($results = mysqli_query($conn, "
SELECT * FROM savedAttendence WHERE groupattended={$viewgroup};
")) {
printf("attendence records gotten\n");
}
$results->fetch_assoc();
//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'viewattendence.html.php';
exit();