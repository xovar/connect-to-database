<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uniqicon</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="nkmn5HZF"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div id="preloader"></div>

    <div id="modal">
      <div class="modal-box">
        <div class="modal-box-icon">
          <i class="fas fa-times"></i>
        </div>
        <div class="modal-header">
          <h1>Share</h1>
        </div>
        <div class="modal-body">
          <div>
            <div class="fb-share-button" data-href="https://uniqicon.com" data-layout="button" data-size="small">
              <a class="icon" id="facebook" target="_blank" href="" class="">
                <i class="fab fa-facebook-square"></i>
                <h1>Facebook</h1>
              </a>
            </div>
          </div>
          <div>
            <a class="icon" class="twitter-share-button"
              id="twitter"
              href="" target="_blank">
              <i class="fab fa-twitter-square"></i>
              <h1>Twitter</h1>
           </a>
          </div>
          <div>
            <a class="icon" id="whatsapp" href="" 		data-action="share/whatsapp/share"
		        target="_blank">
            <i class="fab fa-whatsapp-square"></i>
            <h1>Whatsapp</h1>
          </a> 
            
          </div>
          <div>
            <a class="icon" id="email" href="mailto:test@example.com?subject=uniqicon&body=https://uniqicon.com">
              <i class="fas fa-envelope"></i>
              <h1>Email</h1>
            </a>
          </div>
          <div class="icon icon-custom">
            <i class="fas fa-comment-alt"></i>
            <input id="url" type="text" readonly>
            <button id="copy">copy</button>
          </div>
        </div>
      </div>
    </div>

    <!-- error  page -->
    <div id="error-page">
      <div class="error-content">
        <img src="./404.jpg" width="500px" height="400px" alt="">
        <h1>Order Number Is Invaild</h1>
      </div>
    </div>

    <!-- header -->
    <section class="main">
      <div class="header">
        <div class="header-icons">
            <a href="#" id="download-btn" download><i class="fas fa-arrow-alt-to-bottom"></i></a>
            <i class="fas fa-share-alt"></i>
        </div>
      </div>
      <div class="header-content">
        <div class="header-img">
          <img class="avatar" src="" alt="" />
          <h1 class="main-content"></h1>
        </div>
      </div>
      <!-- audio -->
      <div class="audio-section">
        <div class="audio-content">
          <audio id="player" src=""></audio>
          <div class="player">
            <div class="control">
              <i class="fas fa-play" id="playbtn"></i>
            </div>
            <div class="info">
              <div class="bar">
                <div id="progress"></div>
              </div>
            </div>
          </div>
          <div id="timer">
            <div class="current"></div>
            <div class="duration"></div>
          </div>
        </div>
      </div>

      <!-- Others -->
      
      <div class="others-section">
        <div class="others-section-content">
            <a href="https://uniqicon.com" class="others-btn">Made By</a>
            <a class="others-text" href="https://uniqicon.com">uniqicon.com</a>
        </div>
      </div>

      <!-- check user confirm -->

      <?php
        include './php/config.php';
        $order_number = $_GET["id"];
        $sql = "SELECT * FROM gift_data_table WHERE order_number = '{$order_number}'";

        $result = mysqli_query($conn,$sql) or die("query failed");

        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            if($row["user_confirmed"] == 0){
      ?>
      <div style="margin-top: 80px; display: flex; justify-content: center;">
        <button onclick="preview()" style="border: 3px solid #CBE8E2; background-color: white; width: 141px; height: 41px;cursor: pointer;">Save</button>
      </div>
      <?php
            }
          }
        }
      ?>

      <div id="saved" style="margin-top: 40px; display: flex; justify-content: center; display: none;">
        <div style="background-color: #CBE8E2; text-align: center; font-weight: 900; font-size: 32px;">Thank you! We will insert the message to the QR code together with the gift you have ordered! </div>
      </div>
    </section>


    <div id="fb-root"></div>
    <script src="./app.js"></script>
  </body>
</html>
