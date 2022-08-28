<?php
    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $orderNumber = $_POST["orderNumber"];
        $purchase = $_POST["purchase"];
        $message = $_POST["message"];
        $img = $_POST["img"];
        $voice = $_POST["voice"];
        $date = date("m/d/Y");

        $sql = "UPDATE gift_data SET submission_date = '{$date}', email = '{$email}', message = '{$message}', voice = '{$voice}', your_name = '{$name}', purchase_from = '{$purchase}' WHERE order_number = {$orderNumber}";
        $result = mysqli_query($conn, $sql);
        header("Location: http://localhost/project/voice.html?id=$orderNumber");
?>