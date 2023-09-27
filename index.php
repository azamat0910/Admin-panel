<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
        integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css"
        integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css"
        integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/svg-with-js.min.css"
        integrity="sha512-4oP5WpLD1feGamTDxyKyYjJj9a15AlPfKOt78LpGmZ+XfrUcuC7hjHVTuzhJhO4pPvi3RHL6CI2Tyjdoik3AnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Shttps://fonts.googleapis.com/css?family=Montserrat ">
</head>

<body>
    <?php require './functions/connect.php';
    ?>

    <?php  $sql= $pdo->prepare("SELECT * FROM header");
    $sql->execute();
    $res= $sql->fetch(PDO::FETCH_OBJ);
    // print_r($res->first);
    ?>
    <div class="header">
        <div class="logo"></div>
        <div class="links">
            <a href=""> <i class="fa-solid fa-list"> <?php echo $res->first ?> </i> </a>
            <a href="login.php" class="auth"> <i class="fa-solid fa-user"> <?php echo $res->second ?> </i>
            </a>
            <a href=""><i class="fa-solid fa-magnifying-glass"> <?php echo $res->third ?> </i> </a>
            <a href=""><i class="fa-solid fa-briefcase"> <?php echo $res->fourth ?> </i> </a>
            <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen"> Создать резюме </i></button> </a>
        </div>

    </div>
    <?php  $sqli= $pdo->prepare("SELECT `filename` FROM `image` WHERE `id`=1;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
    <div class="wrapper_parallax">
        <div class="parallax_image" style="background-image:url(./image/img/<?php echo $result->filename?>) ">
            <div class="parallax_text">Поиск работы в Avesto Group</div>
            <div class="parallax_text2">Просто, быстро и эффективно</div>
            <div class="form">
                <form action="reg.php" method='POST'>
                    <input type="text" name = "profession" placeholder=" Введите желаемую вакансию">
                    <div class="button_header"><i class="fa-solid fa-magnifying-glass"></i> Найти</div>
                </form>
            </div>


        </div>
    </div>
    <br>
    <div class="wrapper_title">
        <div class="title_premium">Премиум вакансии</div>
        <a href="">Подробнее</a>
    </div>
    <?php  $sqli= $pdo->prepare("SELECT * FROM jobs");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>
    <div id="carouselExampleIndicators" class="carousel slide mx-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-group">
                    <div class="card">
                        <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..." height="152.5px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
    <?php  $sqli= $pdo->prepare("SELECT `profession`, `info`, `filename` FROM `jobs` WHERE `id`=2;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
                    <div class="card">
                        <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..." height= "152.5px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
    <?php  $sqli= $pdo->prepare("SELECT `profession`, `info`, `filename` FROM `jobs` WHERE `id`=3;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
                    <div class="card">
                        <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..."  height= "152.5px" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="card-group">
    <?php  $sqli= $pdo->prepare("SELECT `profession`, `info`, `filename` FROM `jobs` WHERE `id`=4;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
                    <div class="card">
                    <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..."  height= "152.5px" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
    <?php  $sqli= $pdo->prepare("SELECT `profession`, `info`, `filename` FROM `jobs` WHERE `id`=5;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
                    <div class="card">
                    <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..."  height= "152.5px" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
    <?php  $sqli= $pdo->prepare("SELECT `profession`, `info`, `filename` FROM `jobs` WHERE `id`=6;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    // print_r($result->profession);
    ?>  
                    <div class="card">
                    <img src="./slider/img/<?php echo $result->filename ?>" class="card-img-top" alt="..."  height= "152.5px" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->profession ?></h5>
                            <?php echo $result->info ?>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
    </div>

    <div class="last_vacancies">
        Последние вакансии
        <a href="">Подробнее</a>
    </div>


    <?php  $sqli= $pdo->prepare("SELECT `title`, `info`, `filename` FROM `lastvacancies` WHERE `id`=1;");
    $sqli->execute();
    $result= $sqli->fetch(PDO::FETCH_OBJ);
    ?>  

    <div class="list-group mx-5">
        <a href="#" class="list-group-item list-group-item-action active " aria-current="true"
            style="background-color: gold; color: black" ">
      <img src=" ./lastVacancies/img/<?php echo $result->filename ?>" alt="" width="200px" style="float:left;" class = "mr-3"><h5 class='title_last'><?php echo $result->title ?></h5> 
      <?php echo $result->info ?>
            </a>


            <?php  $sqli= $pdo->prepare("SELECT `title`, `info`, `filename` FROM `lastvacancies` WHERE `id`=2;");
            $sqli->execute();
            $result= $sqli->fetch(PDO::FETCH_OBJ);
    
             ?>  

        <a href="#" class="list-group-item list-group-item-action">
      <img src=" ./lastVacancies/img/<?php echo $result->filename ?>" alt="" width="200px" style="float:left;" class = "mr-3"><h5 class='title_last'><?php echo $result->title ?></h5> 
      <?php echo $result->info ?>
            </a>

            <?php  $sqli= $pdo->prepare("SELECT `title`, `info`, `filename` FROM `lastvacancies` WHERE `id`=3;");
            $sqli->execute();
            $result= $sqli->fetch(PDO::FETCH_OBJ);
    
             ?>  
       <a href="#" class="list-group-item list-group-item-action">
      <img src=" ./lastVacancies/img/<?php echo $result->filename ?>" alt="" width="200px" style="float:left;" class = "mr-3"><h5 class='title_last'><?php echo $result->title ?></h5> 
      <?php echo $result->info ?>
            </a>
            
            <?php  $sqli= $pdo->prepare("SELECT `title`, `info`, `filename` FROM `lastvacancies` WHERE `id`=4;");
            $sqli->execute();
            $result= $sqli->fetch(PDO::FETCH_OBJ);
    
             ?>  
             <a href="#" class="list-group-item list-group-item-action">
      <img src=" ./lastVacancies/img/<?php echo $result->filename ?>" alt="" width="200px" style="float:left;" class = "mr-3"><h5 class='title_last'><?php echo $result->title ?></h5> 
      <?php echo $result->info ?>
        </a>
        <?php  $sqli= $pdo->prepare("SELECT `title`, `info`, `filename` FROM `lastvacancies` WHERE `id`=5;");
            $sqli->execute();
            $result= $sqli->fetch(PDO::FETCH_OBJ);
    
             ?>  
             <a href="#" class="list-group-item list-group-item-action">
      <img src=" ./lastVacancies/img/<?php echo $result->filename ?>" alt="" width="200px" style="float:left;" class = "mr-3"><h5 class='title_last'><?php echo $result->title ?></h5> 
      <?php echo $result->info ?>
        </a>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        </head>
    </div>
    
<div class="categories_title">
Обзор по категориям
<a href="">Подробнее</a>
</div>

</div>

    <hr>

    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                            href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-instagram"></i></a>
                        <!-- <p class="copyright">Company Name © 2018</p> -->
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>