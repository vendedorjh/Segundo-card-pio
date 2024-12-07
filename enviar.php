<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $lanche = filter_var($_POST['lanche'], FILTER_SANITIZE_STRING);
    $quantidade = filter_var($_POST['quantidade'], FILTER_VALIDATE_INT);

    if ($nome && $email && $lanche && $quantidade) {
        $mensagem = "Pedido de $nome:\nLanche: $lanche\nQuantidade: $quantidade\nEmail: $email";
        $mensagem = urlencode($mensagem);
        $numero_whatsapp = '5561992069975';
        $url = "(link unavailable)";
        header("Location: $url");
        exit();
    } else {
        echo '<script>window.history.back(); alert("Preencha todos os campos corretamente!");</script>';
        exit();
    }
}
?>