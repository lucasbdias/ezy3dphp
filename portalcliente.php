<?php
session_start();
if(!isset($_SESSION['cliente'])){
    session_destroy();
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato: Entre em contato | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/areacliente.css">


</head>

<body>
    <?php 
    $pagina = 'contato';
    include"src/includes/menu.php";
    ?>
    <div style="height: 76px; background-color: #212121; width:100%"></div>
    <main>
        <div class="container py-4">
            <div id="panel-cliente" class="row">
                <div id="menu-cliente" class="col-3 p-0">
                    <ul>
                        <!-- <li id="editar_menu-cliente" class="option-menu-cliente">Editar Perfil</li>
                        <li id="alterar_menu-cliente" class="option-menu-cliente">Alterar Senha</li> -->
                        <li id="suporte_menu-cliente" class="option-menu-cliente --menu-cliente-border-on">Suporte
                            Técnico</li>
                    </ul>
                </div>
                <div class="col-9">
                    <div id="editar_panel-cliente" class="w-100 h-100 bg-dark panel-cliente"></div>
                    <div id="alterar_panel-cliente" class="w-100 h-100 bg-danger panel-cliente"></div>
                    <div id="suporte_panel-cliente" class="w-100 h-100 panel-cliente">
                        <form action="src/app/controllers/clienteController.php" method="post" class="pt-4 container"
                            autocomplete="off">
                            <input type="hidden" name="tipo" value="suporte">
                            <input type="hidden" name="idcliente" value="<?= $_SESSION["cliente"]["idcliente"] ?>">
                            <h4>Suporte Técnico</h4>
                            <p>The people listed here are contacts you ve uploaded to Instagram. To remove your synced
                                contacts, tap Delete All.
                            </p>
                            <hr><br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Produto</b></label>
                                <div class="col-sm-5">
                                    <select name="produto" class="custom-select my-1 mr-sm-2 mt-2">
                                        <option selected value="null">Selecione seu produto...</option>
                                        <option value="E1260T">E1260T</option>
                                        <option value="CoreE3">Core E3</option>
                                        <option value="EzyCure">EzyCure</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Nº de
                                        série</b></label>
                                <div class="col-sm-5 text-black">
                                    <input type="text" name="numserie" class="form-control"
                                        placeholder="Informe o número de série do produto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Problema</b></label>
                                <div class="col-sm-5 text-black">
                                    <input type="text" name="problema" class="form-control" placeholder="Problema...">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Descrição</b></label>
                                <div class="col-sm-10">
                                    <textarea id="textareaDescricao" class="form-control mt-2" name="descricao" cols="5"
                                        rows="7" placeholder="Descreva seu problema"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary">Enviar</button><br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include"src/includes/footer.php";?>
    </main>


</body>

<!-- THIS JS -->
<script src="src/app/assets/js/areacliente.js"></script>

</html>