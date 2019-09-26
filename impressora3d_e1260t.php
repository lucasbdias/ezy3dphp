<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E1260T: Impressora 3D DLP LCD | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/impressora3d_e1260t.css">

</head>

<body>
    <?php 
    $pagina = 'impressora3d_e1260t';
    include"src/includes/menu.php";
    ?>
    <main>
        <div class="py-3" style="background-color: #212121">
            <div class="container pt-md-5">
                <div class="row">
                    <div class="col-xl-6 my-5 text-center align-self-center" style="">
                        <h1 class="display-1">
                            <?php
                        echo $titulo1;
                        if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                        echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                        }
                        ?>
                        </h1>
                        <p class="lead">
                            <?php
                        echo $txt1;
                        if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                        echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                        }
                         ?>
                        </p>
                        <div class="row mt-5">
                            <div class="col-md-6 text-center text-md-right pr-md-1">
                                <a class="ezy-lg ezy-orange ezy-button w-75" href="como_comprar.php">
                                    <?php
                                echo $button1;
                                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                                }
                                ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-md-block text-center">
                        <img src="src/app/assets/img/impressora3d_e1260t/e1260t2.png" width="80%">
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-md-5 pt-4 bg-white text-black" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-4 d-flex justify-content-center flex-column">
                        <h3 class="mb-4 display-3">
                            <?php
                echo $titulo2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h3>
                        <p class="lead">
                            <?php
                echo $txt2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>
                        <div class="row my-3">
                            <div class="col-3"> <img class="img-fluid d-block rounded-circle"
                                    src="src/app/assets/img/impressora3d_e1260t/precisao.jpg"> </div>
                            <div class="col-8 d-flex align-items-center">
                                <p class="mb-0 borda-inferior">
                                    <?php
                    echo $txt2_1;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-3 order-1 order-md-2"> <img class="img-fluid d-block rounded-circle"
                                    src="src/app/assets/img/impressora3d_e1260t/martelo.jpg"> </div>
                            <div class="col-8 d-flex align-items-center order-2 order-md-1">
                                <p class="mb-0 borda-inferior">
                                    <?php
                    echo $txt2_2;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-8 mx-auto d-flex justify-content-center flex-column">
                        <img class="img-fluid d-block" src="src/app/assets/img/impressora3d_e1260t/e1260t1.png"
                            width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 bg-light" style="">
            <div class="container">
                <div class="row">
                    <div class="text-center mx-auto col-md-8">
                        <h3 class="mb-3 display-3">
                            <?php
                echo $titulo3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h3>
                        <p class="lead">
                            <?php
                echo $txt3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red"
                            src="src/app/assets/img/impressora3d_e1260t/buda.jpg"> </div>
                    <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red"
                            src="src/app/assets/img/impressora3d_e1260t/chaveiro.jpg"> </div>
                    <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red"
                            src="src/app/assets/img/impressora3d_e1260t/qrcode.jpg"> </div>
                    <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red"
                            src="src/app/assets/img/impressora3d_e1260t/odonto.jpg"> </div>
                </div>
            </div>
        </div>
        <div class="py-5 bg-white text-black" id="features" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="pb-4">
                            <?php
                echo $titulo4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="align-self-center text-lg-right text-center col-lg-4">
                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>

                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>

                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>
                    </div>

                    <div class="my-3 col-lg-4 text-center"><img src="src/app/assets/img/impressora3d_e1260t/e1260t4.png"
                            width="50%">
                    </div>
                    <div class="align-self-center text-lg-left text-center col-lg-4">
                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>

                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>

                        <h4 class="text-primary">
                            <?php
                echo $titulo_especificacao6;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </h4>
                        <p class="mb-5">
                            <?php
                echo $txt_especificacao6;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                        </p>
                        <button class="ezy-lg ezy-orange ezy-button" data-toggle="modal" data-target="#maisInfo">
                            <?php
                echo $btn_especificacao1;
                echo "</button>";
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btn_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 text-center bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 p-3">
                        <img class="img-fluid sombra-colorida-orange"
                            src="src/app/assets/img/impressora3d_e1260t/odontologia.jpg">
                        <h3 class="mt-3"><b>
                                a
                            </b></h3>
                        <p>
                            a
                        </p>
                    </div>
                    <div class="col-lg-3 p-3">
                        <img class="img-fluid sombra-colorida-orange"
                            src="src/app/assets/img/impressora3d_e1260t/joalheria.jpg">
                        <h3 class="mt-3"><b>
                                a
                            </b></h3>
                        <p>
                            a
                        </p>
                    </div>
                    <div class="col-lg-3 p-3">
                        <img class="img-fluid sombra-colorida-orange"
                            src="src/app/assets/img/impressora3d_e1260t/manufatura.jpg">
                        <h3 class="mt-3">
                            <b>

                            </b>
                        </h3>
                        <p>

                        </p>
                    </div>
                    <div class="col-lg-3 p-3">
                        <img class="img-fluid sombra-colorida-orange"
                            src="src/app/assets/img/impressora3d_e1260t/educacao.jpg">
                        <h3 class="mt-3">
                            <b>

                            </b>
                        </h3>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 text-center bg-darker">
            <div class="container">
                <div class="row">
                    <div class="align-items-center d-flex justify-content-center col-md-3 p-3 order-2 order-md-1">
                        <a class="ezy-lg ezy-orange ezy-button w-75" href="contato.php">

                        </a>
                    </div>
                    <div class="col-md-9 p-3 order-1 order-md-2">
                        <h3 class="mb-0">

                        </h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- modal mais informações impressora e1260t -->
        <div class="modal fade bd-example-modal-lg" id="maisInfo" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content text-black">
                    <div class="modal-header">
                        <h1>
                            a
                        </h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <ul>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                        </ul>
                        <hr>
                        <ul>
                            <li>
                                a
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li>
                                a
                            </li>
                            <li><b>
                                    a
                                </b></li>
                        </ul>
                        <hr>
                    </div>

                </div>
            </div>
        </div>


        <?php include"src/includes/footer.php"; ?>
    </main>
</body>

<!-- THIS JS -->
<script src="src/app/assets/js/impressora3d_e1260t.js"></script>

</html>