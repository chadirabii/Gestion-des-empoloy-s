<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        .btn-outline-primary,
        .btn-outline-danger{
            font-size: 15px;
            padding: 9px 23px;
            cursor: pointer;
            border-radius: 40px;
            text-align: center;
            margin-left: 6px;
        }

        .btn-outline-primary:hover {
            transform: translateY(-5px);
            color: #111;
        }

        .btn-outline-danger:hover {
            transform: translateY(-5px);
            color: #111;
        }
    </style>
</head>

<body style="background-color: #f0f2f5;">




    <div class="card  mb-5 mx-auto text-center" style="width: 18rem; margin-top:10%;box-shadow: -10px 8px 5px rgb(187 187 187);">
        <img class="card-img-top" src="https://coursebari.com/wp-content/uploads/2021/06/899048ab0cc455154006fdb9676964b3.jpg" alt="Card image cap">
        <div class="card-body" style="background-color: #b3b7ee;">
            <h5 class="card-title " style="color: white;"><?php echo "Welcome Mr " . strtoupper($_SESSION['username']) . ""; ?></h5>
            <br>
            <a href="../main/home" class="btn btn-outline-primary" style="border-radius: 40px; font-size: 16px; padding: 12px 25px;">Home page</a>
            <a href="logout" class=" btn btn-outline-danger" style="border-radius: 40px; font-size: 16px; padding: 12px 25px;">Logout</a>



        </div>
    </div>
</body>

</html>