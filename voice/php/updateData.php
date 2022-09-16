<?php
    include './config.php';

    $ordernumber = $_GET["id"];

    $sql = "UPDATE gift_data_table SET user_confirmed = 1, enabled = 1 WHERE order_number = {$ordernumber}";

    $result = mysqli_query($conn, $sql);

    $output = json_encode(array("data" => "true"));

    echo $output;

?>