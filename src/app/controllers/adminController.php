<?php
require_once"../Classes/Admin.php";

extract($_POST);
$obj = new Admin();

if($tipo === 'login'){
    $senhaSha1 = sha1($senha);
    if($obj->index("*", "WHERE email='$email' AND senha='$senhaSha1'")){
        $obj->criarSession('accessgod');
    }
    else{
        echo "<script>alert('Senha ou email incorreto(s)');window.history.back();</script>";
    }
}
// else{
//     session_start();
//     session_destroy();
//     header("Location: ../../../index.php");
// }
?>