<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST;
    $message = "Pedidos:\n";

    // Itera sobre os dados e cria a mensagem
    foreach ($data as $campo => $valor) {
        $message .= htmlspecialchars($campo) . ": " . $valor . "\n";
    }

    // Codifica a mensagem para URL (necessário para incluir em um link)
    $encodedMessage = urlencode($message);

    // Número do destinatário (sem o '+', apenas números)
    $whatsappNumber = '5511900000000';

    $whatsappLink = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

    // Redireciona o usuário para o WhatsApp para enviar a mensagem
    header("Location: {$whatsappLink}");
    exit;
}
?>