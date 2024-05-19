<?php include 'db.php'?>
<!doctype html>
<html lang="en" style='overflow-x: hidden !important;'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bizmillion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- poppins font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- exo2 font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- bootstrap link  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid header_p">
            <a class="navbar-brand" href="index.php">
                <img src="images/delogo.svg" alt="img" class='d-none d-md-block'>
                <img src="images/nlogo.svg" alt="img" class='d-block d-md-none' style='width:91px; height:62.89px; margin-left: 10px;'>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list border-none"></i>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gapcol">
                    <?php
                    $numQuery = "SELECT * FROM `menu`";
                    $numrun = mysqli_query($db,$numQuery);
                    while($numrow=mysqli_fetch_assoc($numrun)){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link active1" aria-current="page"
                            href="<?=$numrow['action']?>"><?=$numrow['name']?></a>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="btnenroll nav-link active1" href="register.php">Enroll now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login active1" href="login.php">Login</a>
                    </li>


                </ul>

            </div>
        </div>



    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gapcol">
                <?php
                  $numQuery = "SELECT * FROM `menu`";
                  $numrun = mysqli_query($db,$numQuery);
                  while($numrow=mysqli_fetch_assoc($numrun)){
                    ?>
                <li class="nav-item">
                    <a class="nav-link active1" aria-current="page" href="<?=$numrow['action']?>"><?=$numrow['name']?></a>
                </li>
                <?php
                  }
      
                ?>


                <li class="nav-item">
                    <a class="btnenroll1 nav-link active1" href="register.php">Enroll now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login1 active1" href="login.php">Login</a>
                </li>


            </ul>
        </div>
    </div>