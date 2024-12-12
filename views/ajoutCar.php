<?php
include('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Addveh'])){
    $numCar = $_POST['NumMatricle'];
    $mark = $_POST['Mark'];
    $modl = $_POST['Model'];
    $year = $_POST['vehYear'];
    if(!empty($numCar) && !empty($mark) && !empty($modl) && !empty($year)){
        //insert into
    $query = "INSERT INTO Voiture (NumImmatriculation, Marque, Modele, Annee)
                                VALUES ( '$numCar' ,'$mark', '$modl' ,'$year')";
     $reslt = mysqli_query($cnx,$query);                       
    header('Location: ../cars.php');
       
       }else{
        header('Location: ../cars.php');

       }

}
?>