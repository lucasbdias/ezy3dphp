<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Engenharia 3D: Aplicação 3D na engenharia | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/engenharia3d.css">

</head>

<body>
    <?php 
    $pagina = 'engenharia3d';
    include"src/includes/menu.php";
    ?>

    <main>

        <div class="py-5" style="background-image: linear-gradient(30deg, #bc5453, #333 );">
            <div class="container">
                <div class="row">

                    <div class="p-md-5 p-3 bg-white text-black ml-auto col-md-5 border">
                        <h1>
                            a
                        </h1>
                        <p class="mb-3">
                            a
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-3 text-center bg-light">
            <div class="container">
                <div class="row text-muted">
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_odontologia.php" class="location-link"><i
                                class="d-block fas fa-tooth fa-3x icone-app"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_joalheria.php" class="location-link"><i
                                class="d-block fas fa-gem fa-3x icone-app"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="#" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app"
                                style="color: #f38919"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_entretenimento.php" class="location-link"><i
                                class="d-block fas fa-theater-masks fa-3x icone-app"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="py-5 bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> <img class="img-fluid d-block" src="src/app/assets/img/engenharia3d/ft1.jpg">
                    </div>
                    <div class="px-md-5 p-3 col-md-6 d-flex flex-column justify-content-center">
                        <h2>
                            a
                        </h2>
                        <p class="mb-3 lead">
                            a
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-3 text-center bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-3">
                            a
                        </h2>
                        <p class="lead">
                            a <br>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft2.jpg" width="1500">
                        <h4 class="mt-3 mb-0">
                            <b>
                                a
                            </b>
                        </h4>
                    </div>
                    <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft3.jpg" width="1500">
                        <h4 class="mt-3 mb-0">
                            <b>
                                a
                            </b>
                        </h4>
                    </div>
                    <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft4.jpg" width="1500">
                        <h4 class="mt-3 mb-0">
                            <b>
                                a
                            </b>
                        </h4>
                    </div>
                    <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft5.jpg" width="1500">
                        <h3 class="mt-3 mb-0">
                            <b>
                                a
                            </b>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-md-5 py-3 text-center bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-3">
                            a
                        </h1>
                        <p>
                            a
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-3"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft6.jpg"> </div>
                    <div class="col-md-6 p-3"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft7.jpg"> </div>
                </div>
            </div>
        </div>
        <div class="py-5 bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            a
                        </h2>
                        <p class="lead mb-4">
                            a
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-lg-5 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft8.jpg" width="1500">
                        <h4 class="my-3">
                            <b>
                                a
                            </b>
                        </h4>
                        <p>
                            <?php
              echo $txt5_1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-5 p-4"> <img class="img-fluid d-block box-shadow"
                            src="src/app/assets/img/engenharia3d/ft9.jpg" width="1500">
                        <h4 class="my-3">
                            <b>
                                a
                            </b>
                        </h4>
                        <p>
                            a
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5 text-center border-top bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 p-3">
                        <h3 class="mb-0">
                            a
                        </h3>
                    </div>
                    <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
                        <a class="ezy-button ezy-lg ezy-orange w-75" href="contato.php">
                            a
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-3 text-center bg-info">
            <div class="container">
                <div class="row text-muted">
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_odontologia.php" class="location-link"><i
                                class="d-block fas fa-tooth fa-3x icone-app"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_joalheria.php" class="location-link"><i
                                class="d-block fas fa-gem fa-3x icone-app"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="#" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app"
                                style="color: #f38919"></i></a>
                    </div>
                    <div class="col-md-3 col-4 p-2">
                        <a href="app_entretenimento.php" class="location-link"><i
                                class="d-block fas fa-theater-masks fa-3x icone-app"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include"src/includes/footer.php";?>
    </main>

</body>

<!-- THIS JS -->
<script src="src/app/assets/js/engenharia3d.js"></script>

</html>