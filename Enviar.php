<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $lanche = $_POST['lanche'];
    $quantidade = $_POST['quantidade'];

    $mensagem = "Pedido de $nome:\nLanche: $lanche\nQuantidade: $quantidade\nEmail: $email";
    $mensagem = urlencode($mensagem);

    $numero_whatsapp = '5561992069975';
    $url = "https://api.whatsapp.com/send?phone=$numero_whatsapp&text=$mensagem";

    header("Location: $url");
    exit();
}
?>
