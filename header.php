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
<h1 style= 'color:red; font-size:50px'> Редактирование заголовка сайта </h1>

    <br>
<?php
    $sql= $pdo->prepare("SELECT * FROM header");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res); 
    
?>

    <form action="./header/header.php" method="POST">
    <input type="text" name="first" id="first_column"  value="<?php echo $res->first  ?>">
    <label for="first_column"> < Первая
    <input type="text" name="second" id="second_col" value="<?php echo $res->second  ?>">
    <label for="second_col" > < Вторая
    <input type="text" name="third" id="third_col" value="<?php echo $res->third  ?>">
    <label for="second_col" > < Третья
    <input type="text" name="fourth" id="fourth_col" value="<?php echo $res->fourth  ?>">
    <label for="second_col" > < Четвертая
    <br>
    <input type="submit" value="Сохранить" style="margin-top:20px">
    </form>
    
  
<?php else:
    echo '<h1> Войдите заново </h1>';
    echo '<a href="/login.php"> Войти';

    endif
    ?>

</div>
</body>
</html>
