<?php
require_once"../Classes/Crud.php";

extract($_POST);
$obj = new Crud();

if($tipo === 'cadastro'){
    $values = ["produto" => $produto, "numserie" => $numserie, "problema" => $problema, "descricao" => $descricao, "status" => "pendente"];
}
else if($tipo === 'suporte'){
    // $senhaSha1 = sha1($senha);
    $values = ["fk_cliente" => $idcliente, "produto" => $produto, "numserie" => $numserie, "problema" => $problema, "descricao" => $descricao, "status" => "pendente"];
    if($obj->store("ticket", "0, :fk_cliente, :produto, :numserie, :problema, :descricao, :status, now()", $values)){
        echo"boaaa";
    }
    else{
        echo $idcliente;
    }
}

else if($tipo === "login") {
    // $senhaSha1 = sha1($senha);
    $values = ["email" => $email, "senha" => $senha];
    $cliente = $obj->show("cliente", "*", "WHERE email=:email AND senha=:senha", $values);
    if($cliente){
        session_start();
        $_SESSION['cliente'] = ["nome" => $cliente[0]["nome"], "idcliente" => $cliente[0]["idcliente"]] ;
        header("Location: ../../../portalcliente.php");
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