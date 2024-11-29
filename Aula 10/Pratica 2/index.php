<?php
// Iniciar o processamento de cookies ao enviar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar dados do formulário
    $usuario = $_POST['usuario'] ?? '';
    $time = $_POST['time'] ?? '';

    // Verificar se os dados foram preenchidos
    if (!empty($usuario) && !empty($time)) {
        // Definir os cookies com validade de 1 hora
        setcookie("usuario", $usuario, time() + 3600, "/"); // Expira em 1 hora
        setcookie("time", $time, time() + 3600, "/"); // Expira em 1 hora

        // Redirecionar para evitar reenvio do formulário
        header("Location: index.php");
        exit;
    } else {
        // Mensagem de erro caso os campos não sejam preenchidos
        $erro = "Por favor, preencha todos os campos.";
    }
}

// Recuperar os valores dos cookies para exibir na página
$usuarioSalvo = $_COOKIE['usuario'] ?? '';
$timeSalvo = $_COOKIE['time'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Usuário e Time em Cookies</title>
</head>
<body>
    <h1>Bem-vindo</h1>
    <?php if (!empty($usuarioSalvo) && !empty($timeSalvo)): ?>
        <p>Olá, <strong><?php echo htmlspecialchars($usuarioSalvo); ?></strong>!</p>
        <p>Seu time é <strong><?php echo htmlspecialchars($timeSalvo); ?></strong>.</p>
        <p><a href="?reset=true">Limpar cookies</a></p>
    <?php else: ?>
        <p>Preencha o formulário abaixo para salvar suas informações:</p>
    <?php endif; ?>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
    <?php endif; ?>

    <form method="POST" action="index.php">
        <label for="usuario">Nome do Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo htmlspecialchars($usuarioSalvo); ?>" required>
        <br><br>
        <label for="time">Time:</label>
        <input type="text" name="time" id="time" value="<?php echo htmlspecialchars($timeSalvo); ?>" required>
        <br><br>
        <button type="submit">Salvar</button>
    </form>

    <?php
    // Limpar cookies ao clicar em "Limpar cookies"
    if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
        setcookie("usuario", "", time() - 3600, "/"); // Expira o cookie
        setcookie("time", "", time() - 3600, "/"); // Expira o cookie
        header("Location: index.php"); // Redireciona para evitar reenvio
        exit;
    }
    ?>
</body>
</html>
