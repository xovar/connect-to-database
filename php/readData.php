<?php
    include './config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM gift_data_table  WHERE order_number = {$id}";

    $result = mysqli_query($conn, $sql);

    $output = [];

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output[] = $row;
            echo json_encode($output);
        } 
    }else{
        $output[] = array("datafound" => "false");
        echo json_encode($output);
    }

?>