<?php 
$user = "root";
$password = "";
$host = "localhost";
$db = "testin";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);
    $city=$_POST["city"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $filename=$_POST["filename"];
    $row="UPDATE contact SET city=:city,phone=:phone,email=:email,filename=:filename";
    $query=$pdo->prepare($row);
    $query->execute(["city"=>$city,"phone"=>$phone,"email"=>$email,"filename"=>$filename]);
    echo '<meta HTTP-EQUIV="Refresh" Contect="0; URL=/admin/contact.php">';
    ?>