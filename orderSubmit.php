<?php
 if(isset($_POST['submit']))
 {
     the_orderSubmit();
     
 }
function the_orderSubmit(){

    
$conn = mysqli_connect("sql11.freemysqlhosting.net", "sql11495962", "Hj4c75TUDS", "sql11495962");

$Product1 = $_POST['Product1'];
$Product2 = $_POST['Product2'];
$Product3 = $_POST['Product3'];
$Product4 = $_POST['Product4'];
$Product5 = $_POST['Product5'];
$Product6 = $_POST['Product6'];

$Product1 = intval($Product1);
$Product2 = intval($Product2);
$Product3 = intval($Product3);
$Product4 = intval($Product4);
$Product5 = intval($Product5);
$Product6 = intval($Product6);

$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '1'");
$Product1_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];
$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '2'");
$Product2_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];
$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '3'");
$Product3_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];
$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '4'");
$Product4_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];
$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '5'");
$Product5_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];
$result = mysqli_query($conn, "SELECT quantity FROM products WHERE product_ID = '6'");
$Product6_InStock = mysqli_fetch_array($result, MYSQLI_ASSOC)['quantity'];

$InStock1 = intval($Product1_InStock)-$Product1;
$InStock2 = intval($Product2_InStock)-$Product2;
$InStock3 = intval($Product3_InStock)-$Product3;
$InStock4 = intval($Product4_InStock)-$Product4;
$InStock5 = intval($Product5_InStock)-$Product5;
$InStock6 = intval($Product6_InStock)-$Product6;

$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock1 WHERE product_ID = '1'");
$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock2 WHERE product_ID = '2'");
$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock3 WHERE product_ID = '3'");
$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock4 WHERE product_ID = '4'");
$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock5 WHERE product_ID = '5'");
$result = mysqli_query($conn, "UPDATE products SET quantity = $InStock6 WHERE product_ID = '6'");


//$result = mysqli_query($conn, "UPDATE products SET quantity = 100 WHERE product_ID = '1'");
// echo $_POST['Product1'];
// print_r($_REQUEST);


// exit();
}

?>