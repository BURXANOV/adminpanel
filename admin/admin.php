<?php require_once '../functions/connect.php';?>
<?php session_start();?>
<?php 
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELECT id FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login'=>$login,'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
print_r($array);
if($array["id"]>0){
    $_SESSION['login']=$array["login"];
    header('Location:/admin.php');
}
else{
    header('Location:/login.php');
}