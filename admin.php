<?php session_start(); ?>
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
<p> Вы в админке </p>
<h1 style= 'color:red; font-size:50px'> Редактировать сайт </h1>
<a href='/header.php'> Header
<a href='/image.php'> Фото обложки
<a href='/main.php'> Premium vacancies
<a href='/lastVacancies.php'> Last vacancies
<a href='/logout.php'> Выйти 
    
<?php else:
    echo '<h1> Войдите заново </h1>';
    echo '<a href="/login.php"> Войти';

    endif
    ?>

</div>
</body>
</html>
