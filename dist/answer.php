 <?php 
require_once"../src/app/Classes/Crud.php";
$obj = new Crud();

$id = $_GET["idticket"];

$values = ["idticket" => $id];
$ticket = $obj->show("ticket", "*", "WHERE idticket=:idticket", $values);

?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     <link rel="stylesheet" href="src/assets/css/answer.css">

 </head>

 <body>
     <?php include"src/includes/menu.php" ?>
     <main>
         <div id="container">
             <!-- cliente
         horario
         produto
         numserie
         problema
         descricao -->
             <div id="ticket">
                 <span class="text-muted"><?= $ticket[0]["datahora"] ?></span>
                 <h5>Cliente: </h5>
                 <hr>
                 <h5>Produto: <b><?= $ticket[0]["produto"] ?></b></h5>
                 <span class="text-muted">Numero de serie: <?= $ticket[0]["numserie"] ?></span>

                 <h5 class="mt-3">Problema: <b><?= $ticket[0]["problema"] ?></b></h5><br>

                 <h5>Descricao:</h5>
                 <p><?= $ticket[0]["descricao"] ?></p>
             </div>

             <div id="resposta">
                 <form action="">
                     <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                     <button class="btn btn-warning mt-2">Enviar</button>
                 </form>
             </div>
         </div>
         <?php include"src/includes/footer.php" ?>
     </main>


 </body>


 </html>