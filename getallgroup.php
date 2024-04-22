<?php
try {
    include 'connect.php';


$results = mysqli_query($conn, "
SELECT person FROM {$group_to_get};
");
$results->fetch_assoc();
$group_to_get;

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'startattendence.html.php';
exit();
