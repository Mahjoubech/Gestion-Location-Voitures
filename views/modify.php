 <?php
//  include('./databasecnx.php');
// $id = $_GET['NumClient'];
// $edit = "SELECT * FROM `client` WHERE NumClient = $id";
// $result = mysqli_query($cnx, $edit);
// $val = mysqli_fetch_assoc($result);
// header('Location: index.php');

include ('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])){
    $id = $_GET['NumClientedit'];
    $nomcmpl = $_POST['namecomplet'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $updt = "UPDATE `client` SET Nom='$nomcmpl', Adresse='$email', Tele='$phone' WHERE NumClient=$id";
     $reslt = mysqli_query($cnx,$updt);
    
header('Location: ../clients.php');
}
 ?>

 

