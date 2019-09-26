<?php 
session_start();
if(isset($_SESSION['god'])){ 
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    }

    .btn-ezy2:hover {
        background-color: rgba(157, 14, 20, 0.1);
        color: #9d0e14;
    }

    .card-body,
    button {
        box-shadow: 2px 2px 6px rgba(0, 0, 0, .2);
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="container mb-5 text-center">
                            <img src="src/app/assets/img/includes/menu/logo.svg" width="80%">
                        </div>
                        <form action="src/app/controllers/adminController.php" method="post" autocomplete="off">
                            <input type="hidden" name="tipo" value="login">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="E-mail"
                                    maxlength="50">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha" placeholder="Senha">
                            </div>
                            <button type="submit" id="sendlogin" class="btn-ezy2">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>