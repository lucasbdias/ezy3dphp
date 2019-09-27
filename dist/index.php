<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../src/app/assets/css/dist/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="../src/app/assets/fontawesome/css/all.css">

</head>

<body>
    <?php include"includes/menu.php" ?>
    <main>
        <div id="container">
            <div id="now" class="container-fluid">
                <strong>Dashboard</strong>
            </div>

            <div id="tickets" class="row m-0">
                <div class="col-12 col-lg-4 py-2 px-3 p-lg-4">
                    <div class="tickets">
                        <strong>TODOS</strong><br>
                        <i class="state-ticket fas fa-folder mt-2 --color-blue"></i>
                        <div class="state-num-ticket">0000</div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 py-2 px-3 p-lg-4">
                    <div class="tickets">
                        <strong>CONCLUÍDOS</strong><br>
                        <i class="state-ticket fas fa-check-circle mt-2 --color-green"></i>
                        <div class="state-num-ticket">0000</div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 py-2 px-3 p-lg-4">
                    <div class="tickets">
                        <strong>PENDENTES</strong><br>
                        <i class="state-ticket fas fa-times-circle mt-2 --color-red"></i>
                        <div class="state-num-ticket">0000</div>
                    </div>
                </div>
            </div>

            <div id="panel" class="py-2 px-3 pt-0 px-lg-4">
                <div id="panel-top">
                    <strong>Pendentes</strong>
                </div>
                <div id="panel-main">
                    <div class="ticket-pendente py-2 px-3 px-lg-4 row m-0">
                        <div class="num-ticket">
                            <h1>1</h1>
                        </div>
                        <div class="msg-ticket col-10 ml-0 ml-lg-4">
                            <strong>Nome</strong><br>
                            <strong>Assunto</strong><br>
                            <span class="text-muted">Data</span>
                            <p class="mt-2 text-justify">
                                Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum
                                suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui
                                pellentesque
                                molestie feugiat
                            </p>
                            <i class="responder-ticket call-ticket fas fa-envelope mr-3"></i>
                            <i class="excluir-ticket call-ticket fas fa-trash"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include"includes/footer.php" ?>
    </main>

</body>
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>