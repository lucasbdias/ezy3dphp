<?php 
session_start();
if(!isset($_SESSION["god"])){
    session_destroy();
    header("Location: ../../home.php");
}

extract($_POST);

require_once"../app/Classes/Crud.php";

$obj = new Crud();
$values = ["pt" => $pt, "en" => $en, "es" => $es, "apelido" => $apelido, "pagina" => $pagina];
$obj->update("conteudo", "pt=:pt, en=:en, es=:es WHERE apelido=:apelido AND pagina=:pagina", $values);
?>