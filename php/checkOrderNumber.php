<?php
    include './config.php';

    $orderNumber = $_GET['orderNumber'];

    $sql = "SELECT * FROM gift_data_table  WHERE order_number = {$orderNumber}";

    $result = mysqli_query($conn, $sql);

    $output = [];

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo json_encode($row['user_confirmed']);
        } 
    }else{
        $output = "false";
        echo json_encode($output);
    }
?>