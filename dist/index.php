 <?php 
require_once"../src/app/Classes/Crud.php";
$obj = new Crud();

$tickets = $obj->index("ticket", "count(*)", null);
$tickets_pendentes = $obj->index("ticket", "count(*)", "WHERE status='pendente'");
$tickets_concluidos = $obj->index("ticket", "count(*)", "WHERE status='concluido'");
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     <link rel="stylesheet" href="src/assets/css/index.css">


     <script>
     function aviso(id) {
         let res = confirm('Deseja realmente excluir este produto?');
         if (res) {
             $.ajax({
                 url: "http://localhost/ezy3dphp/src/app/controllers/adminController.php",
                 type: "post",
                 data: {
                     tipo: "excluirTicket",
                     idticket: id
                 }
             }).done(function() {
                 location.reload();
             });

         }
     }
     </script>

 </head>

 <body>
     <?php include"src/includes/menu.php" ?>
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
                         <div class="state-num-ticket"><?= $tickets[0][0] ?></div>
                     </div>
                 </div>
                 <div class="col-12 col-lg-4 py-2 px-3 p-lg-4">
                     <div class="tickets">
                         <strong>CONCLUÍDOS</strong><br>
                         <i class="state-ticket fas fa-check-circle mt-2 --color-green"></i>
                         <div class="state-num-ticket"><?= $tickets_concluidos[0][0] ?></div>
                     </div>
                 </div>
                 <div class="col-12 col-lg-4 py-2 px-3 p-lg-4">
                     <div class="tickets">
                         <strong>PENDENTES</strong><br>
                         <i class="state-ticket fas fa-times-circle mt-2 --color-red"></i>
                         <div class="state-num-ticket"><?= $tickets_pendentes[0][0] ?></div>
                     </div>
                 </div>
             </div>

             <div id="panel" class="py-2 px-3 pt-0 px-lg-4">
                 <div id="panel-top">
                     <strong>Pendentes</strong>
                 </div>
                 <div id="panel-main">

                     <?php 
                    $allTickets = $obj->index("ticket", "*", null);

                    if($allTickets){
                    $contador = 1;
                    foreach ($allTickets as $ticket) {

                    $values = ["fk_cliente" => $ticket["fk_cliente"]];
                    $cliente = $obj->show("cliente", "*", "WHERE idcliente=:fk_cliente", $values);
                    ?>
                     <div class="ticket-pendente py-4 px-3 px-lg-4 row m-0">
                         <div class="num-ticket">
                             <h1><?= $contador ?></h1>
                         </div>
                         <div class="msg-ticket col-10 ml-0 ml-lg-4">
                             <strong><?= $cliente[0]["nome"] ?></strong><br>
                             <strong><?= $ticket["problema"] ?></strong><br>
                             <span
                                 class="text-muted"><?= (new DateTime($ticket["datahora"]))->format('d/m/Y H:i'); ?></span>
                             <p class="mt-2 text-justify">
                                 <?= $ticket["descricao"] ?>
                             </p>
                             <i onclick="window.location.href='answer.php?idticket=<?= $ticket['idticket'] ?>'"
                                 class="responder-ticket call-ticket fas fa-envelope mr-3"></i>
                             <i onclick="aviso(<?= $ticket['idticket'] ?>)"
                                 class="excluir-ticket call-ticket fas fa-trash"></i>
                         </div>
                     </div>
                     <?php $contador++; } } else{ ?>
                     <div class="py-4 px-3 px-lg-4 row m-0" style="background-color: #fff">
                         <div class="col-10 ml-0 ml-lg-4">
                             <h3 class="text-muted text-center">Nenhum ticket pendente.</h3>
                         </div>
                     </div>
                     <?php } ?>
                 </div>
             </div>
         </div>
         <?php include"src/includes/footer.php" ?>
     </main>

     <script src="src/assets/js/index.js"></script>

 </body>

 </html>