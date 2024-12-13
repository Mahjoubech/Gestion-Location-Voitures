
<?php
include('./databasecnx.php');
if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Add'])){
    $nomcmpl = htmlspecialchars($_POST['namecomplet']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $errors = [];
    if (empty($nomcmpl)) {
        $errors[] = "< script > alert('invalid name') < /script>";
    }
    if (empty($phone)) {
        $errors[] = "< script > alert('invalid name') < /script>";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "< script > alert('invalid name') < /script>";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "< script > alert('invalid name') < /script>";
    }
    if (empty($errors)) {
        //insert into
    $query =  $cnx->query("INSERT INTO client (NumClient, Nom, Adresse, Tele) 
                                VALUES (null ,'$nomcmpl', '$email' ,'$phone')");
    header('Location: ../clients.php');
       exit;
       }else{
        $_SESSION['errors'] = $errors;
        print_r($_SESSION['errors']);
        unset($_SESSION['errors']);
     header('Location: ../clients.php');
        exit;
       }
   

}
?>