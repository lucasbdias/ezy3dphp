<?php
if(!isset($_POST["email"])){
    header("Location: ../../contato.php");
    return false;
}

extract($_POST);




$destinatario = $email;
$remetente = "ti@ezy3d.com.br";
$mensagem = $msg;

// Variável que junta os valores acima e monta o corpo do email
require_once "../app/assets/phpmailer/class.phpmailer.php";

define('EMAIL', $remetente); // <-- Insira aqui o seu GMail
define('SENHA', 'TIEzy3D1809'); // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
    global $error;
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP(); // Ativar SMTP
    $mail->SMTPDebug = 1; // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true; // Autenticação ativada
    $mail->SMTPSecure = 'ssl'; // TLS REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
    $mail->Port = 465; // A porta 587 deverá estar aberta em
    $mail->IsHTML(true);
    $mail->Username = EMAIL;
    $mail->Password = SENHA;
    $mail->SetFrom($de);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if (!$mail->Send()) {
        $error = 'Mail error: ' . $mail->ErrorInfo;
        echo $error;
        return false;
    } else {
        echo "<script>
    alert('Enviado com sucesso!');
    window.location.href='../../contato.php';
    </script>";
        return true;
    }
}

smtpmailer($destinatario, $remetente, $nome, $assunto, $mensagem);
?>