<?php session_start();?>
<?php require_once '../functions/connect.php'?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
       <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
<h1>редактирование контакт</h1>
    <?php if(!empty($_SESSION["login"])):?>
    <?php echo "вы в админке,".$_SESSION['login'];?>
    <br>
    <a href="./logout.php">выйти</a>
    <br>
    
    <?php else:
       echo ' <h2>админ</h2>';
       echo '<a href="/">выйти</a>';
    ?>
    <?php 
    $sql=$pdo->prepare("SELECT * FROM contact");
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
    <form action="/admin/contact/contact.php" method="post">
        <input type="text" name="city" value="<?php echo $res->city ?>">
        <input type="text" name="phone" value="<?php echo $res->phone ?>">
        <input type="text" name="email" value="<?php echo $res->email ?>">
        <input type="text" name="filename" value="<?php echo $res->filename ?>">
        <input type="submit" value="сохранить "  >
        
    </form>
    
    
    <?php endif ?>
    </div>
 
</body>
</html>
