<?php
    include './config.php';

    $order_number = $_GET["id"];


    $sql = "INSERT INTO `gift_data_table`(`order_number`)  VALUES ('{$order_number}')";

    $output = [];

    if(mysqli_query($conn, $sql)){
        $output[] = array("data" => "ture");
        echo json_encode($output);        
    }
?>