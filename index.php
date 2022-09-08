

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
            <form id="formOrder" class="orderForm">
                <div class="form-header">
                    <h1>Submit your unique order number</h1>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Order Number</label> <br>
                        <input class="form-input" name="orderNumber" type="text" required>
                        <div class="error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div class="">This field is required.</div>
                        </div>
                        <div id="order-error"></div>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-footer">Submit</button>
                </div>
            </form>
        </div>
    </section>


    <script src="./assets/js/order.js"></script>
</body>
</html>