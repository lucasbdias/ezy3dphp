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
    <link rel="stylesheet" href="src/app/assets/css/contato.css">

</head>

<body>
    <?php 
    $pagina = 'contato';
    include"src/includes/menu.php";
    ?>

    <main>
        <div>
            <div class="container-fluid bg-white" style="margin-top: 76px;border-bottom: solid 1px rgba(0,0,0,.2)">
                <div class="row">
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.454484618452!2d-47.86271848538968!3d-23.335543459176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8c25732cd5b%3A0xb31a9291a589ffa0!2sR.+Lu%C3%ADs+de+Camargo+Barros%2C+20+-+Vila+Sao+Cristovao%2C+Tatu%C3%AD+-+SP%2C+18280-010!5e0!3m2!1spt-BR!2sbr!4v1558876350093!5m2!1spt-BR!2sbr"
                            width="100%" height="400" frameborder="0" style="border:0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4 bg-white text-black">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h4>
                                a<br>
                            </h4>
                            <p class="lead">
                                a<br><br>
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-cloud text-primary mr-2"></i>
                                    a
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-bookmark text-primary mr-2"></i>
                                    a
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-bell text-primary mr-2"></i>
                                    a
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-life-ring text-primary mr-2"></i>
                                    a
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="col-md-12">
                            <hr>
                            <form id="formContato" method="post" action="src/commands/enviarEmailContato.php"
                                autocomplete="off">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" placeholder="?php? $input1 ?>"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="?php? $input2 ?>"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="assunto"
                                        placeholder="?php? $input3 ?>" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="msg" placeholder="?php? $input4 ?>"></textarea>
                                </div>
                                <button id="btnForm" class="ezy-button ezy-orange">?php? $button1 ?></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include"src/includes/footer.php";?>
    </main>


</body>

<!-- THIS JS -->
<script src="src/app/assets/js/contato.js"></script>

</html>