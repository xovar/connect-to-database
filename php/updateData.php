<?php
    include './config.php';

        $name = $_POST["name"];
        $email = $_POST["email"];
        $orderNumber = $_POST["orderNumber"];
        $purchase = $_POST["purchase"];
        $message = $_POST["message"];
        $date = date("m/d/Y");
        $img_file = '';
        $voice_file = '';

        $check_sql = "SELECT * FROM gift_data  WHERE order_number = {$orderNumber}";

        $checkResult = mysqli_query($conn, $check_sql);
        
        if(mysqli_num_rows($checkResult) > 0){
            /* for img */
            if(isset($_FILES['img'])){
                $file_name = $_FILES['img']['name'];
                $file_type = $_FILES['img']['type'];
                $file_tmp = $_FILES['img']['tmp_name'];
                $file_ext = end(explode('.',$file_name));

                $extensions = array("jpeg","jpg","png");

                if(in_array($file_ext,$extensions) === true){
                    $new_name = time(). "-".basename($file_name);
                    $target = "../voice/upload/img/".$new_name;
                    $img_file = $new_name;
                    move_uploaded_file($file_tmp,$target);
                }
            }

            /* for voice */
            if(isset($_FILES['voice'])){
                $voice_name = $_FILES['voice']['name'];
                $voice_type = $_FILES['voice']['type'];
                $voice_tmp = $_FILES['voice']['tmp_name'];
                $voice_ext = end(explode('.',$voice_name));

                $extensions_voice = array("mp3", "m4a", "wav");

                if(in_array($voice_ext,$extensions_voice) === true){
                    $new_voice_name = time(). "-".basename($voice_name);
                    $voice_target = "../voice/upload/music/".$new_voice_name;
                    $voice_file = $new_voice_name;
                    move_uploaded_file($voice_tmp,$voice_target);
                }
            }
        }

        $sql = "UPDATE gift_data SET submission_date = '{$date}', email = '{$email}', message = '{$message}', voice = '{$voice_file}', gitf_img =  '{$img_file}', your_name = '{$name}', purchase_from = '{$purchase}' WHERE order_number = {$orderNumber}";
        $result = mysqli_query($conn, $sql);
        header("Location: $hostname/voice/ordernumber.html?id=$orderNumber");
?>