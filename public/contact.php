<?php require_once './functions/connect.php';?>
<?php 

$sql = $pdo->prepare("SELECT * FROM contact");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocer :)</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="nav-row">
                <a href="./index.html" class="logo"><strong>Jocer</strong><em>:)</em></a>


                <ul class="nav-list">
                    <li class="nav-list__item"><a href="./index.html" class="nav-list__link nav-list__link--active"><?php echo $res["city"]?></a></li>
                    <li class="nav-list__item"><a href="./calculator.php" class="nav-list__link "><?php echo $res["phone"]?></a></li>
                    <li class="nav-list__item"><a href="#skills" class="nav-list__link"><?php echo $res["email"]?></a></li>
                    <li class="nav-list__item"><a href="#services" class="nav-list__link"><?php echo $res["filename"]?></a></li>
                    <li class="nav-list__item"><a href="./contacts.html" class="nav-list__link">
                        
                        <ul class="nav-lis">
                        <img width="40" height="50" src="./img/pngtree-mail-icon-png-image_4419865.jpg" alt="icon">
                        <li class="nav-list__item"><p>Гориячая лига </p></li>
                        <li class="nav-list__item"><p>0505186600</p></li>
                        </ul></a></li>
                        <li class="nav-list__item"><a href="../admin/admin.php" class="nav-list__link nav-list__link--active">admin panel</a></li>
                        
                </ul>
                
            </div>
        </div>
    </nav>