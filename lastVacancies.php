<?php session_start(); ?>
<?php require_once './functions/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<?php if(!empty($_SESSION['login'])): ?>
    <div style = "text-align:center">
<?php echo 'Добрый день, '."<h1 style='display:inline'>". $_SESSION['login']."</h1>";
?>
<p> Вы в админке</p>
<h1 style= 'color:red; font-size:50px'> Редактирование Последних вакансий </h1>
<br>

<?php
    $sql= $pdo->prepare("SELECT title, info, filename FROM lastvacancies ");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="/lastVacancies/lastVacancies.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" id="first"  value="<?php echo $res->title  ?>">
    <label for="first"> < Заголовок
    <input type="text" name="info" id="second" value="<?php echo $res->info  ?>">
    <label for="second" > < Информация
    <input type="file" name="im4" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
   
    <br>
    <input type="submit" value="Сохранить" name="save4" style="margin-top:20px">
    <br><br>
    <img src="lastVacancies/img/<?php echo $res->filename ?> " alt="" height = "150px ">
    </form>

    <br><br>
<?php
    $sql= $pdo->prepare("SELECT title, info,filename FROM lastvacancies WHERE id=2");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="/lastVacancies/lastVacancies.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title2" id="first"  value="<?php echo $res->title  ?>">
    <label for="first"> < Заголовок
    <input type="text" name="info2" id="second" value="<?php echo $res->info  ?>">
    <label for="second" > < Информация
    <input type="file" name="im5" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
   
    <br>
    <input type="submit" value="Сохранить" name="save5" style="margin-top:20px">
    <br><br>
    <img src="lastVacancies/img/<?php echo $res->filename ?> " alt="" height = "150px ">
    </form>
    
    <br><br>
<?php
    $sql= $pdo->prepare("SELECT title, info,filename FROM lastvacancies WHERE id=3");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="/lastVacancies/lastVacancies.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title3" id="first"  value="<?php echo $res->title  ?>">
    <label for="first"> < Заголовок
    <input type="text" name="info3" id="second" value="<?php echo $res->info  ?>">
    <label for="second" > < Информация
    <input type="file" name="im6" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
   
    <br>
    <input type="submit" value="Сохранить" name="save6" style="margin-top:20px">
    <br><br>
    <img src="lastVacancies/img/<?php echo $res->filename ?> " alt="" height = "150px ">
    </form>
    
    <br><br>
<?php
    $sql= $pdo->prepare("SELECT title, info,filename FROM lastvacancies WHERE id=4");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="/lastVacancies/lastVacancies.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title4" id="first"  value="<?php echo $res->title  ?>">
    <label for="first"> < Заголовок
    <input type="text" name="info4" id="second" value="<?php echo $res->info  ?>">
    <label for="second" > < Информация
    <input type="file" name="im7" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
   
    <br>
    <input type="submit" value="Сохранить" name="save7" style="margin-top:20px">
    <br><br>
    <img src="lastVacancies/img/<?php echo $res->filename ?> " alt="" height = "150px ">
    </form>
    
    <br><br>
<?php
    $sql= $pdo->prepare("SELECT title, info, filename FROM lastvacancies WHERE id=5");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="/lastVacancies/lastVacancies.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title5" id="first"  value="<?php echo $res->title  ?>">
    <label for="first"> < Заголовок
    <input type="text" name="info5" id="second" value="<?php echo $res->info  ?>">
    <label for="second" > < Информация
    <input type="file" name="im8" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
   
    <br>
    <input type="submit" value="Сохранить" name="save8" style="margin-top:20px">
    <br><br>
    <img src="lastVacancies/img/<?php echo $res->filename ?> " alt="" height = "150px ">
    </form>
    
  
<?php else:
    echo '<h1> Войдите заново </h1>';
    echo '<a href="/login.php"> Войти';

    endif
    ?>