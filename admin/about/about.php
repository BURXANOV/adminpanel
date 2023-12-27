<?php 
$user = "root";
$password = "";
$host = "localhost";
$db = "testing";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO($dbh, $user, $password);

?>

<?php
if (isset($_POST["save"])){
    $list=['.php','.zip','.js','.html'];
    foreach($list as $item){
        if(preg_match("/$item$/",$_FILES['im']['name']))exit("расширение файла не подходит");
    }
    $type=getimagesize($_FILES['im']['tmp_name']);
    if ($type && ($type['mime']!='image/png' || $type['mime'] !='image/jpg' || $type['mime'] !='image/jpeg' || $type)){
        if($_FILES['im']['size']<1024 * 1000){
            $upload= 'img/'.$_FILES['im']['name'];
            if (move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "файл загружен";
            else echo "ошибка при загрузка файла";

        }
        else exit ("размер файла превышен");

    }
    else exit ("тип файла подходит");
}
?>
<?php
$title=$_POST["title"];
$desciption=$_POST["description"];
$sql="UPDATE about SET title=:title,description=:desciption,filename=:filename";
$query=$pdo->prepare($sql);
$query->execute(["title"=>$title,"description"=>$description,"filename"=>$_FILES['im']['name']]);
?>