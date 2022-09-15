<?php
  include './php/config.php';

  session_start();

  if(isset($_SESSION['username'])){
    header("Location: $hostname/admin/table.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqicon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <section class="main order-section">
        <!-- header -->
        <div class="header">
            <div class="logo"></div>
        </div>

        <!-- form -->
        <div class="form-section">
            <form  action="<?php $_SERVER['PHP_SELF'];?>" id="formOrder" class="orderForm" method="POST">
                <div class="form-header">
                    <h1>Submit your unique order number</h1>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Username</label> <br>
                        <input class="form-input" name="username" type="text" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name">Password</label> <br>
                        <input class="form-input" name="password" type="password" required>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" name="login" class="btn-footer">Log In</button>
                </div>
            </form>
            
        </div>
    </section>

    <!-- login php -->
    <?php
                if(isset($_POST['login'])){
                    include './php/config.php';
                    $username = mysqli_real_escape_string($conn, $_POST["username"]);
                    $password = md5($_POST["password"]);
                    $sql = "SELECT * FROM login WHERE username = '{$username}' AND password = '{$password}'";
                    $result = mysqli_query($conn, $sql) or die("query failed");

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            session_start();
                            $_SESSION["username"] = $row['username'];
                            $_SESSION["admin"] = $row['admin'];
                            header("Location: $hostname/admin/table.php");
                        }
                    }
                }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
</body>
</html>