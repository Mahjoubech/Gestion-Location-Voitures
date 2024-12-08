
<?php
 $host = 'localhost';     
 $dbname = 'location_voiture';  
 $username = 'root';     
 $password = 'Mahjoub@123';          
 
 try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "kbhadaaaaaaaaaaaaaam : ";
 } catch (PDOException $e) {
     echo "Erreur de connexion : " . $e->getMessage();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/tailwind.js"></script>
    <title></title>
</head>
<body  class=" bg-slate-600">
    <div>
       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
    </div>
</body>
</html>