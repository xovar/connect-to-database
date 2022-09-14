<?php

include './config.php';

$id = $_GET["id"];

$sql = "DELETE FROM gift_data_table WHERE order_number = '{$id}'";

if(mysqli_query($conn, $sql)){
    $output[] = array("data" => "ture");
    echo json_encode($output);        
}

?>