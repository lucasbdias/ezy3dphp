<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phylos: Impressora 3D DLP LCD | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/impressora3d_phylos.css">

</head>

<body>
    <?php 
    $pagina = 'impressora3d_phylos';
    include"src/includes/menu.php";
    ?>

    <main>
        <div class="pt-5 pb-4" style="background-image: linear-gradient(30deg, #f38919 10%, #333 );">
            <div class="container pt-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-6 text-center"><img
                                    src="src/app/assets/img/impressora3d_phylos/phylos1.png" width="75%"></div>
                            <div class="col-lg-6">
                                <div class="p-md-5 p-3 bg-light text-black ml-auto border">
                                    <div>
                                        <h1 class=" text-center text-md-left mt-4 mt-md-0">
                                            a
                                        </h1>
                                        <p class="mt-3 text-center text-md-left">
                                            a
                                        </p>
                                        <hr>
                                        <form class="mt-3 text-black" method="post" action="controle/cliente.php">
                                            <input type="hidden" name="tipo" value="lancamentoPhylos">
                                            <label for="email_lancamento_phylos">E-mail:</label>
                                            <div class="form-inline">
                                                <input type="email" class="form-control" name="emailPhylos"
                                                    placeholder="aaaaaaaaa">
                                                <button class="ezy-button mt-2 mt-md-0 ml-md-1 ezy-orange">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="px-md-5 p-3 col-md-6 d-flex flex-column align-items-start justify-content-center">
                        <h2 class="display-4">
                            a
                        </h2>
                        <p class="mb-3 lead">
                            a
                        </p>
                        <p class="mb-2">
                            a
                        </p>
                        <div class="row">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid d-block" src="src/app/assets/img/impressora3d_phylos/phylos2.png">
                    </div>
                </div>
            </div>
        </div>



        <div class="py-5 bg-light text-black" id="features" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="pb-4">
                            a
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="align-self-center text-lg-right text-center col-lg-4">
                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>

                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>

                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>
                    </div>

                    <div class="my-3 col-lg-4 text-center">
                        <img src="src/app/assets/img/impressora3d_phylos/phylos3.png" width="50%">
                    </div>
                    <div class="align-self-center text-lg-left text-center col-lg-4">
                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>

                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>

                        <h4 class="text-primary">
                            a
                        </h4>
                        <p class="mb-5">
                            a
                        </p>

                    </div>
                </div>
            </div>
        </div>



        <div class="py-3 text-center bg-darker" data-pingendo-transient="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 p-3">
                        <h3 class="mb-0">
                            a
                        </h3>
                    </div>
                    <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
                        <a class="ezy-lg ezy-button ezy-orange w-75" href="contato.php">
                            a
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php include"src/includes/footer.php";?>
    </main>

</body>

<!-- THIS JS -->
<script src="src/app/assets/js/impressora3d_phylos.js"></script>

</html>