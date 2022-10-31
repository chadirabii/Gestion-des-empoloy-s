<?php
include "../dbs/db.php";
session_start();
if (isset($_POST['send'])) {
  $cin = $_POST['Id'];
  $nom = ucwords($_POST['Name']);
  $prenom = ucwords($_POST['Surname']);
  $age = $_POST['Age'];
  $adresse = ($_POST['adresse']);
  $email = $_POST['email'];
  $num_tlf = $_POST['num_tlf'];
  $score = $_POST['score'];
  $gender = $_POST['gender'];
  $service = $_POST['service'];
  $sql = "INSERT INTO `employee`(`cin`, `nom`, `prenom`, `age`, `adresse`, `email`, `num_tlf`,`score`, `gender`,`service`) VALUES ('$cin','$nom','$prenom','$age','$adresse','$email','$num_tlf' ,'$score', '$gender','$service')";

  if ($cnx->query($sql)) {
    header("location: home");
  }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ajouter Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../style/styleee.css" media="all">
  <script>
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
    <div id="mySidebar" class="x">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <h2 class="text-center" style="margin-top: 20px;"><?php echo "Welcome Mr " . strtoupper($_SESSION['username']) . ""; ?></h2>
    <br>
    <a href="home" class="fa fa-home" aria-hidden="true"> HOME</a>
    <a href="propos" class="fa fa-info" aria-hidden="true" style="margin-top: 380px;margin-left:2px;">&nbsp; &nbsp;A PROPOS</a>

    <a href="profile" class="fa fa-user" aria-hidden="true"> &nbsp;PROFILE</a>
    <a href="../login/logout" class="fa fa-power-off" aria-hidden="true"> &nbsp;SE DECONNECTER</a>
  </div>


  <nav>
    <a class="navbar-brand "></a>
    <button class="openbtn" onclick="openNav()">&#9776; </button>
  </nav>


  <div id="main">
    <form method="POST" action="ajouter.php" class="offset-4" name="hh">
      <div class="container form-group col-md-6 text-secondary fw-bold ms-2 py-2">
        <label class="mt-3">CIN</label>
        <input type="number" onKeyPress="if(this.value.length==8) return false;" text-align:center required name="Id" span class="form-control text-capitalize" minlength="8" maxlength="8" size="4" placeholder="&#xf2bc;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">NOM</label>
        <input type="text" required name="Name" span class="form-control text-capitalize" placeholder="&#xf007;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">PRENOM</label>
        <input type="text" required name="Surname" span class="form-control text-capitalize" placeholder="&#xf2c0;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">AGE</label>
        <input type="Age" required name="Age" span class="form-control text-capitalize" maxlength="3" placeholder="&#xf073;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">ADRESSE</label>
        <input type="text" required name="adresse" span class="form-control" placeholder="&#xf015;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">EMAIL</label>
        <input type="email" required name="email" span class="form-control" maxlength="30" placeholder="&#xf0e0;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">NUM TELEPHONE</label>
        <input type="number" onKeyPress="if(this.value.length==8) return false;" text-align:center required name="num_tlf" span class="form-control" minlength="8" maxlength="8" size="4" placeholder="&#xf095;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">SCORE</label>
        <input type="number" onKeyPress="if(this.value.length==5) return false;" text-align:center required name="score" span class="form-control" minlength="1" maxlength="5" size="4" placeholder="&#xf005;" style="font-family: Arial, FontAwesome" />
        <!-- <label class="mt-3">DATE DEBUT DE CONGÉ</label>
        <input type="date" text-align:center name="d_d_conge" span class="form-control" placeholder="&#xf005;" style="font-family: Arial, FontAwesome" />
        <label class="mt-3">DATE FIN DE CONGÉ</label>
        <input type="date" text-align:center name="d_f_conge" span class="form-control" placeholder="&#xf005;" style="font-family: Arial, FontAwesome" /> -->


        <label class="mt-3">GENDRE : &nbsp; &nbsp;</label>
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
          <button class="btn btn-outline-success" name="send" onclick="ajouter()">Add</button>
          <input type="reset" name="reset" value="Reset" class="btn btn-outline-danger">
        </div>
      </div>
    </form>
  </div>


</body>

</html>