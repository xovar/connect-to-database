<?php
  include './php/config.php';

  session_start();
  
  if(!isset($_SESSION["admin"])){
    header("Location: $hostname/admin/index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="header mb-5 bg-success d-flex justify-content-between align-items-center">
      <p class="text-white ms-4">UNIQICON</p>
      <div class="me-4"><a href="./php/logout.php" class="btn btn-warning">Log Out</a></div>
    </div>
    <form class="saerchBar">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="search">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </form>
    <table class="table table-striped table-bordered border-secondary">
    <thead>
        <tr>
            <th scope="col"><input type="checkbox"></th>
            <th></th>
            <th scope="col"><i class="fa-solid fa-calendar-days"></i> Database created date</th>
            <th scope="col"><i class="fa-solid fa-calendar-days"></i> User Draft submitted date</th>
            <th scope="col"><input type="checkbox"> User confirmed?</th>
            <th scope="col"><i class="fa-solid fa-t"></i> clint IP Address</th>
            <th scope="col"><input type="checkbox"> Enabled</th>
            <th scope="col"><i class="fa-solid fa-t"></i> Your Name</th>
            <th scope="col"><i class="fa-solid fa-at"></i> E-mail</th>
            <th scope="col"><i class="fa-solid fa-t"></i> Your Order Number</th>
            <th scope="col"><i class="fa-solid fa-t"></i> Enter Text message</th>
            <th scope="col"><i class="fa-solid fa-paperclip"></i> voice message</th>
            <th scope="col"><i class="fa-solid fa-paperclip"></i> image</th>
            <th scope="col"><i class="fa-solid fa-tag"></i> purchase from</th>
            <th scope="col"><i class="fa-solid fa-paperclip"></i> QR code</th>
            <th scope="col"><i class="fa-solid fa-circle-plus"></i> ADD</th>
        </tr>
    </thead>
    <tbody id="tbody">
        
    </tbody>
    </table>
    <!-- Modal For delete button-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this data?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="deleteBtn">Yes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal For addBtn-->
<div class="modal fade" id="exampleModalAddBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert order number</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
            <input id="orderNumberInput" type="text" class="form-control" placeholder="Insert order number" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="saveOrderNumber"><i class="fa-solid fa-circle-plus"></i> ADD</button>
      </div>
    </div>
  </div>
</div>


<canvas id="qrcode"></canvas>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>