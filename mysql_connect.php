<?php
$mysqli = new mysqli('sulley.cah.ucf.edu','me049855','G3ttangl3d!','me049855');         

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



?>

