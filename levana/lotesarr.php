<?php
    session_start();
    require 'dbcon.php';

$sql = "SELECT * FROM lotes";
$result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
//create an array
$lotesarray = array();
while($row =mysqli_fetch_assoc($result)){
    $lotesarray[] = $row;
}
echo "const lotes = ";
echo json_encode($lotesarray);
echo ";\n";
?>