<?php
    include './config.php';

    $order_number = $_GET["id"];

    $date = date("m/d/Y");


    $sql = "INSERT INTO `gift_data_table`(`order_number`,`datebase_created_date`)  VALUES ('{$order_number}','{$date}')";

    $output = [];

    if(mysqli_query($conn, $sql)){
        $output[] = array("data" => "ture");
        echo json_encode($output);        
    }
?>