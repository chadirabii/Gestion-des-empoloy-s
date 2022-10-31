<?php
include "../dbs/db.php";
session_start();

if (isset($_POST['edit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if ($password == $cpassword) {

        $edit = mysqli_query($cnx, "update users set email='$email', password='$password' where email='$email'");
    }
    if ($edit) {
        mysqli_close($cnx);
        header("location:home.php");
        exit;
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="../style/styleee.css" media="all">


    <script>
        function editer() {
            alert("User bien modifié!");

        }

        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h2 class="text-center" style="margin-top: 20px;"><?php echo "Welcome Mr " . strtoupper($_SESSION['username']) . ""; ?></h2>
        <br>
        <a href="home" class="fa fa-home" aria-hidden="true"> HOME</a>
        <a href="ajouter" class="fa fa-user-plus" aria-hidden="true" style="margin-top: 380px;"> AJOUTER UN EMPLOYEE</a>

        <a href="propos" class="fa fa-info" aria-hidden="true" style="margin-left:2px;">&nbsp; &nbsp;A PROPOS</a>
        <a href="../login/logout" class="fa fa-power-off" aria-hidden="true"> SE DECONNECTER</a>

    </div>



    <nav>

        <a class="navbar-brand "></a>
        <button class="openbtn" onclick="openNav()">&#9776; </button>

    </nav>

    <div id="mainn" style="transition: margin-left .5s;padding: 16px; margin-left: 0px ;margin-top: 194px;">



        <form method="POST" class="offset-4">
            <div class="container form-group col-md-6 text-muted fw-bold ms-1 py-8">

                <label class="mt-3">ENTER YOUR EMAIL</label>
                <input type="text" name="email" placeholder="&#xf015;" Required class="form-control" style="font-family: Arial, FontAwesome">
                <label class="mt-3">PASSWORD</label>
                <input type="password" name="password" placeholder="&#xf023;" Required class="form-control" style="font-family: Arial, FontAwesome">
                <label class="mt-3">CONFIRM PASSWORD</label>
                <input type="password" name="password" placeholder="&#xf023;" Required class="form-control" style="font-family: Arial, FontAwesome">



                <div class="mt-3">
                    <input type="submit" name="edit" onclick="editer()" value="Save" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</body>

</html>