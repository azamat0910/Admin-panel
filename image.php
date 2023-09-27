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
<h1 style= 'color:red; font-size:50px'> Редактирование фото обложки </h1>
<br>

<?php
    $sql= $pdo->prepare("SELECT filename FROM image ");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="./image/image.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="image" id="im" value="<?php echo $res->filename ?>">
    <label for="im" > < Фото
    <br>
    <input type="submit" value="Сохранить" name="save9" style="margin-top:20px">
    </form>
     
<?php else:
    echo '<h1> Войдите заново </h1>';
    echo '<a href="/login.php"> Войти';

    endif
    ?>