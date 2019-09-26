<?php
session_start();
if(!isset($_SESSION["god"])){
    session_destroy();
    header("Location: ../../home.php");
}

$apelido = $_GET["apelido"];
$pagina = $_GET["pag"];

require_once"../app/Classes/Crud.php";
$obj = new Crud();

$txt = $obj->index("*", "conteudo", "WHERE apelido='$apelido' AND pagina='$pagina'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar texto</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    .btn-ezy2 {
        text-decoration: none !important;
        cursor: pointer;
        border: solid 1px #9d0e14;
        background-color: #9d0e14;
        color: #fff;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 15px;
        padding-left: 15px;
        transition: 0.3s !important;
    }

    .btn-ezy2:hover {
        background-color: rgba(157, 14, 20, 0.1);
        color: #9d0e14;
        transition: 0.3s !important;
    }

    .btn-ezy3 {
        text-decoration: none !important;
        cursor: pointer;
        border: solid 1px #666;
        print_r($txt);
        background-color: #666;
        color: #fff;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 15px;
        padding-left: 15px;
        transition: 0.3s !important;
    }

    .btn-ezy3:hover {
        background-color: rgba(55, 55, 55, 0.1);
        color: #666;
        transition: 0.3s !important;
    }

    .card-body,
    button,
    #btn-cancel {
        box-shadow: 2px 2px 6px rgba(0, 0, 0, .2);
    }

    #btn-cancel {
        border-radius: 0 !important;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="alterarTexto.php" method="post" autocomplete="off">
                            <input type="hidden" name="apelido" value="<?= $apelido ?>">
                            <input type="hidden" name="pagina" value="<?= $pagina ?>">
                            <div class="form-group my-4">
                                <label>Português:</label><br>
                                <textarea class="form-control" name="pt" rows="5"><?= $txt[0]["pt"] ?></textarea>
                            </div>
                            <div class="form-group my-4">
                                <label>Inglês:</label><br>
                                <textarea class="form-control" name="en" rows="5"><?= $txt[0]["en"] ?></textarea>
                            </div>
                            <div class="form-group my-4">
                                <label>Espanhol:</label><br>
                                <textarea class="form-control" name="es" rows="5"><?= $txt[0]["es"] ?></textarea>
                            </div>
                            <div id="btn-cancel" onclick="window.location.href='http://localhost/ezy3dphp/home.php'"
                                class="btn btn-ezy3">
                                Cancelar</div>
                            <button type="submit" class="btn-ezy2">Alterar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>