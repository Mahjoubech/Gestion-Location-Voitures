<?php
include('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Addcontrat'])){
    $nomCln = htmlspecialchars($_POST['clientcontratname']);
    $regcar = $_POST['regicontrat'];
    $ddebut = $_POST['DateDebut'];
    $dfin = $_POST['DateFin'];
    $duree = $_POST['Duree'];
    var_dump($nomCln);
    if(!empty($nomCln) && !empty($regcar) && !empty($ddebut) && !empty($dfin) && !empty($duree)){
        //insert into
        $query = "INSERT INTO contrat ( NumImmatriculation, NumClient, DateDebut, DateFin, Duree) 
                  VALUES (?,?, ?, ?, ?)";
    $params = array($regcar,$nomCln,$ddebut,$dfin,$duree);
     $reslt = mysqli_prepare($cnx,$query);
     
     $reslt->execute($params);
     header('Location: ../contrats.php');
        
       }else{
        header('Location: ../contrats.php');
     
        // echo $query;
       
       }

}
?>