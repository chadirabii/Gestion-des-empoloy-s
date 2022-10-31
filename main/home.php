<?php
include "../dbs/db.php";
session_start();
if (!isset($_SESSION['username']))
  header("Location: index");
$sql = "SELECT * FROM employee ";
$rows = mysqli_query($cnx, $sql);

// if (isset($_POST['search'])) {
//   $search_term = $_POST['search_box'];
//   $sql .= "SELECT * FROM employee WHERE nom= '{$search_box}'";
// }




















?>








<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


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
  <!-- <form name="search_form" method="POST" action="home.php">
    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <h2 class="text-center" style="margin-top: 20px;"><?php echo "Welcome Mr " . strtoupper($_SESSION['username']) . ""; ?></h2>
    <br>

    <a href="ajouter" class="fa fa-user-plus" aria-hidden="true"> AJOUTER UN EMPLOYEE</a>
    <a href="propos" class="fa fa-info" aria-hidden="true" style="margin-top: 370px;margin-left:2px;">&nbsp; &nbsp;A PROPOS</a>

    <a href="profile" class="fa fa-user"> &nbsp;PROFILE</a>
    <a href="../login/logout" class="fa fa-power-off" aria-hidden="true"> &nbsp;SE DECONNECTER</a>

  </div>


  <nav>




    <a class="navbar-brand "></a>
    <button class="openbtn" onclick="openNav()">&#9776; </button>




  </nav>

  <div id="main">
    <?php while ($row = mysqli_fetch_assoc($rows)) : ?>
      <div class="card-body">
        <div class="container">
          <div class="card">
            <div class="front">
              <p class="card-text"><b>Nom : </b> <?php echo $row['nom']; ?></p>
              <p class="card-text"><b>Prenom : </b><?php echo $row['prenom']; ?></p>
              <p class="card-text"><b>Service : </b><?php echo $row['service']; ?></p>

            </div>

            <div class="back">
              <p class="card-text"><b>Cin : </b><?php echo $row['cin']; ?></p>
              <p class="card-text"><b>Age : </b><?php echo $row['age']; ?></p>
              <p class="card-text"><b>Adresse : </b><?php echo $row['adresse']; ?></p>
              <p class="card-text"><b>Email : </b><?php echo $row['email']; ?></p>
              <p class="card-text"><b>Phone number : </b><?php echo $row['num_tlf']; ?></p>
              <p class="card-text"><b>Gender : </b><?php echo $row['gender']; ?></p>
              <p class="card-text"><b>Score : </b><?php echo $row['score']; ?></p>
              <a href="edit?cin=<?php echo $row['cin']; ?>" class=" btn btn-outline-primary">Edit</a>
              <a href="delete?cin=<?php echo $row['cin']; ?>" class=" btn btn-outline-danger">Delete</a>

            </div>

          </div>
        </div>
      </div>


    <?php endwhile; ?>


    <a href="ajouter" class="fa fa-plus fl-btn" aria-hidden="true"></a>



  </div>

</body>

</html>