<?php
include "../dbs/db.php";
session_start();
$cin = $_GET['cin'];


$query = mysqli_query($cnx, "select * from employee where cin='$cin'");

$data = mysqli_fetch_array($query);

if (isset($_POST['edit'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];
  $num_tlf = $_POST['num_tlf'];
  $score = $_POST['score'];
  $gender = $_POST['gender'];
  $service = $_POST['service'];
  $edit = mysqli_query($cnx, "update employee set nom='$nom',prenom='$prenom', age='$age', adresse='$adresse' , email='$email' , num_tlf='$num_tlf',score='$score',gender='$gender', service='$service' where cin='$cin'");

  if ($edit) {
    mysqli_close($cnx);
    header("location:home");
    exit;
  }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Employee</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="../style/styleee.css" media="all">

  <script>
    // function editer() {
    //   alert("Employé bien modifié!");

    // }

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
    <a href="propos" class="fa fa-info" aria-hidden="true" style="margin-top: 380px;margin-left:2px;">&nbsp; &nbsp;A PROPOS</a>

    <a href="profile" class="fa fa-user" aria-hidden="true"> PROFILE</a>
    <a href="../login/logout" class="fa fa-power-off" aria-hidden="true"> SE DECONNECTER</a>
  </div>



  <nav>

    <a class="navbar-brand "></a>
    <button class="openbtn" onclick="openNav()">&#9776; </button>

  </nav>

  <div id="main">



    <form method="POST" class="offset-4">
      <div class="container form-group col-md-6 text-muted fw-bold ms-2 py-2">


        <label class="mt-3">NAME</label>
        <input type="text" name="nom" value="<?php echo $data['nom'] ?>" placeholder="&#xf007;" Required class="form-control" placeholder="&#xf2c0;" style="font-family: Arial, FontAwesome">
        <label class="mt-3">LASTNAME</label>
        <input type="text" name="prenom" value="<?php echo $data['prenom'] ?>" placeholder="&#xf2c0;" Required class="form-control" placeholder="&#xf2c0;" style="font-family: Arial, FontAwesome">
        <label class="mt-3">AGE</label>
        <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="&#xf073;" Required class="form-control" placeholder="&#xf073;" style="font-family: Arial, FontAwesome">
        <label class="mt-3">ADRESSE</label>
        <input type="text" name="adresse" value="<?php echo $data['adresse'] ?>" placeholder="&#xf015;" Required class="form-control" style="font-family: Arial, FontAwesome">
        <label class="mt-3">EMAIL</label>
        <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="&#xf0e0;" Required class="form-control" style="font-family: Arial, FontAwesome">
        <label class="mt-3">PHONE NUMBER</label>
        <input type="number" onKeyPress="if(this.value.length==8) return false;" name="num_tlf" value="<?php echo $data['num_tlf'] ?>" placeholder="&#xf095;" equired class="form-control" style="font-family: Arial, FontAwesome">





        <label class="mt-3">Score</label>
        <input type="number" onKeyPress="if(this.value.length==5) return false;" text-align:center value="<?php echo $data['score'] ?>" required name="score" span class="form-control" minlength="1" maxlength="5" size="4" placeholder="&#xf005;" style="font-family: Arial, FontAwesome" />



        <label class="mt-3">GENDER</label>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required>
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <br>



        <label class="mt-3">OCCUPATION</label>

        <select name="service" class="form-select" aria-label="Default select example" required>
          <option value="">Select</option>
          <option value="Informatic Service">Informatic Service</option>
          <option value="Economic Service ">Economic Service </option>
          <option value="Medical Service">Medical Service</option>
          <option value="Security Service">Security Service</option>
        </select>












        <div class="mt-3">
          <input type="submit" name="edit" onclick="editer()" value="Save" class="btn btn-success">
        </div>
      </div>
    </form>
  </div>
</body>

</html>