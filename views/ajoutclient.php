
<?php
include('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Add'])){
    $nomcmpl = htmlspecialchars($_POST['namecomplet']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    if(!empty($nomcmpl) && !empty($phone) && !empty($email)){
        //insert into
       

    $query =  $cnx->query("INSERT INTO client (NumClient, Nom, Adresse, Tele) 
                                VALUES (null ,'$nomcmpl', '$email' ,'$phone')");
    header('Location: ../index.php');
       
       }else{
        
        echo "alert(hhhhhhhhhhhhhhhhhhhhhhhhhhh);";
        header('Location: ../clients.php');

       }
   

}
?>