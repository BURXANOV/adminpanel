<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
       <title>Document</title>
</head>
<body>
    <div style="text-align: center;">

    <?php if(!empty($_SESSION["login"])):?>
    <?php echo "вы в админке,".$_SESSION['login'];?>
    <br>
    <a href="./logout.php">выйти</a>
    <br>
    
    <?php else:
       echo ' <h2>вы что хакер?</h2>';
       echo '<a href="/"> на главную </a>';
    ?>
    <a href="/admin/contact.php">контанк</a>
    <a href=""></a>
    <a href=""></a>
    <a href="/admin/about.php"></a>
    <?php endif ?>
    </div>
 
</body>
</html>
