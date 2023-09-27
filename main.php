<?php session_start(); ?>
<?php require_once './functions/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<?php if(!empty($_SESSION['login'])): ?>
    <div style = "text-align:center">
<?php echo 'Добрый день, '."<h1 style='display:inline'>". $_SESSION['login']."</h1>";
?>
<p> Вы в админке</p>
<h1 style= 'color:red; font-size:50px'> Редактирование слайдера </h1>

    <br>
<?php
    $sql= $pdo->prepare("SELECT * FROM jobs");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
    <p> 1 </p>
 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="prof" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info" id="info" value="<?php echo $res->info  ?>">
    <label for="info" > < Инфо
    <input type="file" name="im" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save" style="margin-top:20px">
    </form>
    <br>
    <br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">  
    <br>
    <hr>
    <br>
    <p> 2 </p>
    <?php
    $sql= $pdo->prepare("SELECT `profession`, `company`, `info`, `filename` FROM `jobs` WHERE `id`=2");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data" >
    <input type="text" name="prof2" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company2" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info2" id="info" value="<?php echo $res->info  ?>">
    <label for="info" > < Инфо
    <input type="file" name="im2" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save2" style="margin-top:20px">
    </form>
 <br>
 <br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">       
<br>
<br>
<hr>

<?php
    $sql= $pdo->prepare("SELECT `profession`, `company`, `info`, `filename` FROM `jobs` WHERE `id`=3");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
<br>
<p>3</p>

 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data" >
    <input type="text" name="prof3" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company3" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info3" id="info" value="<?php echo $res->info  ?>">    
    <label for="info" > < Инфо
    <input type="file" name="im3" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save3" style="margin-top:20px">
    </form>
<br><br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">       
<br>
<br>
<hr>

<?php
    $sql= $pdo->prepare("SELECT `profession`, `company`, `info`, `filename` FROM `jobs` WHERE `id`=4");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
<br>
<p>4</p>

 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data" >
    <input type="text" name="prof4" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company4" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info4" id="info" value="<?php echo $res->info  ?>">    
    <label for="info" > < Инфо
    <input type="file" name="im4" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save4" style="margin-top:20px">
    </form>
<br><br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">  
<br>
<br>
<hr>     
<?php
    $sql= $pdo->prepare("SELECT `profession`, `company`, `info`, `filename` FROM `jobs` WHERE `id`=5");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
<br>
<p>5</p>

 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data" >
    <input type="text" name="prof5" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company5" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info5" id="info" value="<?php echo $res->info  ?>">    
    <label for="info" > < Инфо
    <input type="file" name="im5" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save5" style="margin-top:20px">
    </form>
<br><br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">       
<br>
<br>
<hr>     
<?php
    $sql= $pdo->prepare("SELECT `profession`, `company`, `info`, `filename` FROM `jobs` WHERE `id`=6");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
?>
<br>
<p>6</p>

 <form action="./slider/slider.php" method="POST" enctype="multipart/form-data" >
    <input type="text" name="prof6" id="prof"  value="<?php echo $res->profession  ?>">
    <label for="prof"> < Профессия
    <input type="text" name="company6" id="company" value="<?php echo $res->company  ?>">
    <label for="company" > < Компания
    <input type="text" name="info6" id="info" value="<?php echo $res->info  ?>">    
    <label for="info" > < Инфо
    <input type="file" name="im6" id="im" value="<?php echo $res->filename ?>">
    <label for="photo" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save6" style="margin-top:20px">
    </form>
<br><br>
    <img src="slider/img/<?php echo $res->filename ?> " alt="" height = "250px ">       

    
<?php else:
    echo '<h1> Войдите заново </h1>';
    echo '<a href="/login.php"> Войти';

    endif
    ?>
