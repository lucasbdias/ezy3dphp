<?php
require_once"../Classes/Crud.php";

extract($_POST);
$obj = new Crud();

if($tipo === 'login'){
    // $senhaSha1 = sha1($senha);
    $values = ["email" => $email, "senha" => $senha];
    if($obj->show("admin", "*", "WHERE email=:email AND senha=:senha", $values)){
        session_start();
        $_SESSION['god'] = 'accessgod';
        header("Location: ../../../index.php");
    }
    else{
        echo "<script>alert('Senha ou email incorreto(s)');window.history.back();</script>";
    }
}

else if ($tipo === 'excluirTicket') {
    $values = ["id" => $idticket];
	$obj->excluir("ticket", "WHERE idticket=:id", $values);
}

// else{
//     session_start();
//     session_destroy();
//     header("Location: ../../../index.php");
// }
?>