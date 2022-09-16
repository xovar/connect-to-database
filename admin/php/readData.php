<?php
    include './config.php';

    $sql = "SELECT * FROM gift_data_table";

    $result = mysqli_query($conn, $sql);

    session_start();


    $output = "";
    $count = 1;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            $output .= "
            <tr>
            <th scope='row'>{$count}<i class='fa-regular fa-star'></i></th>
            ";

            if($_SESSION['admin'] == 1){
                $output .="
                <td>
                <button 
                type='button' 
                class='btn btn-outline-danger customBtn' 
                data-bs-toggle='modal' 
                data-bs-target='#exampleModal'
                onclick='deleteData({$row['order_number']})'>Delete</button></td>";
            }

            $output .= "
            <td>{$row['datebase_created_date']}</td>
            <td>{$row['user_draft_submitted_date']}</td>
            ";
            if($row['user_confirmed'] == 1){
                $output .="
                <td><input type='checkbox' checked='true'></td>
                ";
            }else{
                $output .="
                <td><input type='checkbox'></td>
                ";
            }
            $output .=" 
            <td>{$row['client_ip_address']}</td>
            ";

            if($row['enabled'] == 1){
                $output .="
                <td><input type='checkbox' checked='true'></td>
                ";
            }else{
                $output .="
                <td><input type='checkbox'></td>
                ";
            }

            $output .="
            <td>{$row['your_name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['order_number']}</td>
            <td>{$row['enter_text_message']}</td>
            <td>{$row['voice_message_file']}</td>
            <td>{$row['image']}</td>
            <td><span class='purchase'>{$row['purchase_from']}</span></td>
            <td><a href='#' onclick='qrCode({$row['order_number']})'>Download</a></td>
            <td></td>
            </tr>            
            ";
            $count = $count + 1;
        } 
        $output .= "
            <tr>
            <th scope='row'><button type='button' class='btn btn-outline-success customBtn' data-bs-toggle='modal' data-bs-target='#exampleModalAddBtn'><i class='fa-solid fa-circle-plus'></i> ADD</button></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
            ";
        echo json_encode(["data" => $output]); 
    }
?>