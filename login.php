<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Админ панель</title>
</head>
<body>
  <h2 class = "title">Вход в админ панель</h2>

  <form action="admin/admin.php" method = 'post' style= "text-align: center;
    padding-top: 100px; ">
    <div class="form-group mb-2">
        <input type="text" placeholder = " Введите логин" name = "login" > 
    </div>
    <div class="form-group mb-2">
        <input type="text" placeholder = "Введите пароль" name= "password" >
    </div>
    <button type= "submit" class = "btn btn-primary">Войти</button>
  </form>
 
</body>
</html>