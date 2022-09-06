

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqicon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <section class="main order-section">
        <!-- header -->
        <div class="header">
            <div class="logo"></div>
        </div>

        <!-- form -->
        <div class="form-section">
            <form id="form" method="post" action="./php/updateData.php" enctype="multipart/form-data">
                <div class="form-header">
                    <h1>Submit your unique order number</h1>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Order Number</label> <br>
                        <input class="form-input" name="name" type="text" required>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-footer">Submit</button>
                </div>
                <!-- <div class="form-header">
                    <h1>Submit Your voice message</h1>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Your Name</label> <br>
                        <input class="form-input" name="name" type="text" required>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label> <br>
                        <input class="form-input" name="email" type="email" required>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Your Order Number</label> <br>
                        <input class="form-input" name="orderNumber" type="text" required>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Purchase from</label> <br>
                        <select name="purchase" required placeholder="Please select" name="" class="form-input">
                            <option value="Please Select" selected disabled>Please Select</option>
                            <option value="Amazon">Amazon</option>
                            <option value="ebay">ebay</option>
                            <option value="Uniqcon.com">Uniqcon.com</option>
                            <option value="Gmarket / 1st / Naver">Gmarket / 1st / Naver</option>
                            <option value="Shopee">Shopee</option>
                        </select>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>
                <div class="img-placeholder">
                    <img src="./assets/images/image_placeholder.png" alt="">
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Enter Text message</label> <br>
                        <input name="message" class="form-input" type="text">
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label">Upload Image</label> <br>
                        <div class="upload">
                            <div class="btn-warning">
                                <div class="file-input-content">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h1>Browse Files</h1>
                                    <p>Drag and drop files here</p>
                                </div>
                                <input name="img" id="img-file" type="file" required>
                                <div class="error-img">
                                    <i style="margin-left: 10px;" class="fa-solid fa-circle-exclamation"></i>
                                    <div style="margin-left: 10px;" class="error-img-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="img-preview-section">
                            <div class="img-section">
                                <img style="object-fit: cover;" src="" class="img-preview" alt="">
                                <p class="img-name"></p>
                                <p class="img-size"></p>
                            </div> 
                            <div class="delete-section">
                                <i class="fa-solid fa-trash-can img-delete"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label">Upload voice message</label> <br>
                        <div class="upload">
                            <div class="btn-warning">
                                <div class="file-input-content">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h1>Browse Files</h1>
                                    <p>Drag and drop files here</p>
                                </div>
                                <input name="voice" id="voice-file" type="file" required>
                                <div class="error-music">
                                    <i style="margin-left: 10px;" class="fa-solid fa-circle-exclamation"></i>
                                    <div style="margin-left: 10px;" class="error-music-text">database_voice_mess...(2).docx has invalid extension. Only mp3, wma, mpg, flv, avi are allowed.</div>
                                </div>
                            </div>
                        </div>
                        <div class="music-preview-section">
                            <div class="music-section">
                                <div style="width: 26; height: 26px; background-color: white; line-height: 26px; padding: 0 10px;">
                                    <img  src="./assets/images/download.svg" class="music-preview" alt="">
                                </div>
                                <p class="music-name"></p>
                                <p class="music-size"></p>
                            </div> 
                            <div class="delete-section">
                                <i id="music-delete" class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn-footer">Submit</button>
                </div> -->
            </form>
        </div>
    </section>


    <script src="./assets/js/app.js"></script>
</body>
</html>