<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>вход в админку</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2 style="text-align: center; padding-top:100px">вход а административную панель</h2>
    <form action="admin/admin.php" method="post" style="text-align: center; padding-top:100px">
        <div class="form-group">
            <input type="text" placeholder="введите логин" name="login">

        </div>
        <div class="form-group">
            <input type="text" placeholder="введите пароль" name="password">

        </div>
        <button type="submit" class="btn btn-primary">войти</button>

    </form>
</body>
</html>