<?php

try {

// Run the create table query
if (mysqli_query($conn, "
CREATE TABLE {$group_name} (
`Id` INT NOT NULL AUTO_INCREMENT ,
`person` VARCHAR(225),
PRIMARY KEY (`Id`)
);
")){
printf("Table created\n");
}

/*if(mysqli_query($conn, "CREATE Table savedAttendence (
    `Id` INT NOT NULL AUTO_INCREMENT ,
    `groupattended` VARCHAR(255),
    `person` VARCHAR(225),
    `dateattended` DATE,
    `attendend` BIT,
    PRIMARY KEY (`Id`)
)"))*/

//Close the connection
mysqli_close($conn);
} catch (\Throwable $th) {
    echo $th;
    include 'error.html';
}

include 'addclass.html';
exit();