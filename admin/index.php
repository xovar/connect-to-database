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
    <form class="d-flex saerchBar">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit"><i class="fa-sharp fa-solid fa-filter"></i> filter</button>
    </form>
    <table class="table table-striped table-bordered border-secondary">
    <thead>
        <tr>
            <th scope="col"><input type="checkbox"></th>
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
    <tbody>
        <tr>
            <th scope="row">1 <i class="fa-regular fa-star"></i></th>
            <td>2022-09</td>
            <td>2022-09</td>
            <td><input type="checkbox"></td>
            <td></td>
            <td><input type="checkbox"></td>
            <td>sfas</td>
            <td>@gmail</td>
            <td>1221</td>
            <td></td>
            <td></td>
            <td></td>
            <td><span class="purchase">amazon</span></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row"><i class="fa-solid fa-circle-plus"></i> ADD</th>
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
    </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>