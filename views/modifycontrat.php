
<?php 
include ('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contratedit'])){
    $numcont = $_GET['Numcontratedit'];
    $ddt = $_POST['DatDbut'];
    $ddf = $_POST['DatFin'];
    $dure = $_POST['Dure'];
    $updat = "UPDATE `contrat` SET DateDebut= '$ddt', DateFin='$ddf', Duree='$dure' WHERE NumContrat='$numcont'";
    var_dump( $updat);
    $reslt = mysqli_query($cnx,$updat);
    
     header('Location: ../contrats.php');
}

?>