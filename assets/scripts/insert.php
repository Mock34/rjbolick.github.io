<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "StravaFocusResponse");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$mrupdateRank = mysqli_real_escape_string($link, $_REQUEST['mrupdateRank']);

// Attempt insert query execution
$sql = "INSERT INTO response (enteredRank) VALUES ('$mrupdateRank')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
