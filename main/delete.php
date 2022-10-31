<?php
include "../dbs/db.php";
session_start();
$cin = $_GET['cin'];


$query = mysqli_query($cnx, "select * from employee where cin='$cin'");

$data = mysqli_fetch_array($query);


$edit = mysqli_query($cnx, "delete from employee where cin='$cin'");






?>
<script >
    alert("Employé Supprimé!");
    window.location.replace("home");
</script>