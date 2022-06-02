<?php
$conn = mysqli_connect("sql11.freemysqlhosting.net", "sql11495962", "Hj4c75TUDS", "sql11495962");
$result = mysqli_query($conn, "SELECT * FROM products");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
   
}

echo json_encode($data);
exit();