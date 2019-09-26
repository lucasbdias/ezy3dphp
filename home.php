<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Impressoras 3D | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/home.css">

    <style>

    </style>

</head>

<body>

    <?php 
    $pagina = 'home';
    include"src/includes/menu.php";
    ?>

    <main>

        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-item active">
                <div id="slide1" class="slides"></div>
                <div class="carousel-caption">
                    <h1>
                        <?= $titulo_slide1 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ? 
                        "<a href='src/commands/listarTexto.php?apelido=titulo_slide1&pag=$pagina'><i class='fas fa-edit'></i></a>" : '' ?>
                    </h1>
                    <p>
                        <?= $slide1 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=slide1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                    </p>
                    <button class="btn-ezy2"><?= $btnslide1 ?></button>
                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnslide1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                </div>
            </div>
            <div class="carousel-item">
                <div id="slide2" class="slides"></div>
                <div class="carousel-caption">
                    <h1>
                        <?= $titulo_slide2 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ? 
                        "<a href='src/commands/listarTexto.php?apelido=titulo_slide1&pag=$pagina'><i class='fas fa-edit'></i></a>" : '' ?>
                    </h1>
                    <p>
                        <?= $slide2 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=slide1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                    </p>
                    <button class="btn-ezy2"><?= $btnslide2 ?></button>
                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnslide2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                </div>
            </div>
            <div class="carousel-item">
                <div id="slide3" class="slides"></div>
                <div class="carousel-caption">
                    <h1>
                        <?= $titulo_slide3 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ? 
                        "<a href='src/commands/listarTexto.php?apelido=titulo_slide1&pag=$pagina'><i class='fas fa-edit'></i></a>" : '' ?>
                    </h1>
                    <p>
                        <?= $slide3 ?>
                        <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=slide1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                    </p>
                    <button class="btn-ezy2"><?= $btnslide3 ?></button>
                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnslide3&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        </div>

        <div class="container">
            <div class="row" id="cards-principais">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 p-0 d-none d-md-block">
                            <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg">
                        </div>
                        <div class="col-12 col-md-6 p-0 bg-darker">
                            <div class="p-4 text-white">
                                <h4>
                                    <?= $titulo1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p>
                                    <?= $txt1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=txt1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a class="btn-ezy2" href="#">
                                    <?= $button1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=button1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 p-0 d-none d-md-block">
                            <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg">
                        </div>
                        <div class="col-12 col-md-6 p-0 bg-darker">
                            <div class="p-4 text-white">
                                <h4>
                                    <?= $titulo2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p>
                                    <?= $txt2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=txt2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a class="btn-ezy2" href="#">
                                    <?= $button2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=button2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="container-impressoras3d">
                <h1>
                    <?= $titulo3 ?>
                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo3&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                </h1>

                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-1.svg"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?= $produto1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=produto1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p class="card-text">
                                    <?= $descproduto1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=descproduto1&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a href="impressora3d_e1260t.php" class="btn-ezy1">
                                    <?= $btnproduto1 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-1.svg"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?= $produto2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=produto2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p class="card-text">
                                    <?= $descproduto2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=descproduto2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a href="impressora3d_e1260t.php" class="btn-ezy1">
                                    <?= $btnproduto2 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnproduto2&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-1.svg"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?= $produto3 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=produto3&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p class="card-text">
                                    <?= $descproduto3 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=descproduto3&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a href="impressora3d_e1260t.php" class="btn-ezy1">
                                    <?= $btnproduto3 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnproduto3&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div id="container-acessorios" class="mt-5">
                <h1>
                    <?= $titulo4 ?>
                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo4&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                </h1>

                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-1.svg"
                                alt="Imagem de capa do card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?= $produto4 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=produto4&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </h4>
                                <p class="card-text">
                                    <?= $descproduto4 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=descproduto4&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </p>
                                <a href="impressora3d_e1260t.php" class="btn-ezy1">
                                    <?= $btnproduto4 ?>
                                    <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=btnproduto4&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="mt-5 pt-0 pt-lg-5" style="background-image: linear-gradient( to top, #353535 50%, #eaeaea 50% );">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-0 m-0 bg-danger">
                        <img src="src/app/assets/img/home/f4.jpg" width="100%" height="100%">
                    </div>
                    <div class="col-md-6 px-4 py-5 m-0 text-center bg-orange">
                        <div>
                        </div>
                        <h3 class="text-white">
                            <?= $titulo5 ?>
                            <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=titulo5&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                        </h3>
                        <p class="lead mt-4 text-white">
                            <?= $txt5 ?>
                            <?php echo (isset($_SESSION["god"]) && $_SESSION["god"] === 'accessgod') ?
                         "<a href='src/commands/listarTexto.php?apelido=txt5&pag=$pagina'><i class='fas fa-edit'></i></a></a>" : '' ?>
                        </p>
                        <i class="fas fa-chevron-down fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 text-center bg-darker">
            <div class="container">
                <div class="row text-muted m-auto">
                    <div class="col-md-4 col-4 p-2">
                        <a href="app_odontologia.php" class="location-link">
                            <i class="d-block fas fa-tooth fa-3x icone-app"></i>
                        </a>
                    </div>
                    <div class="col-md-4 col-4 p-2">
                        <a href="app_joalheria.php" class="location-link">
                            <i class="d-block fas fa-gem fa-3x icone-app"></i>
                        </a>
                    </div>
                    <div class="col-md-4 col-4 p-2">
                        <a href="app_engenharia.php" class="location-link">
                            <i class="d-block fas fa-cog fa-3x icone-app"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include"src/includes/footer.php";?>
    </main>
</body>

<!-- THIS JS -->
<script src="src/app/assets/js/home.js"></script>

</html>