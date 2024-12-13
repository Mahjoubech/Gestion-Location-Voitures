
<?php 
include ('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editveh'])){
    $numCar = $_POST['NumMatricle'];
    $mark = $_POST['Mark'];
    $modl = $_POST['Model'];
    $year = $_POST['vehYear'];
    $updt = "UPDATE `voiture` SET NumImmatriculation= '$numCar', Marque='$mark', Modele='$modl', Annee='$year' WHERE NumImmatriculation='$numCar'";
     $reslt = mysqli_query($cnx,$updt);
    
header('Location: ../cars.php');
}

?>