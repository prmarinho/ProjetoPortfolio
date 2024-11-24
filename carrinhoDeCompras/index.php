<?php
session_start();
include 'db.php';

// Adicionando produtos ao carrinho
if (isset($_GET['add'])) {
    $produto_id = $_GET['add'];
    $quantidade = 1;

    // Verifica se o carrinho já existe na sessão
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Adiciona ou atualiza o produto no carrinho
    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id] += $quantidade;
    } else {
        $_SESSION['carrinho'][$produto_id] = $quantidade;
    }
}

// Removendo produtos do carrinho
if (isset($_GET['remove'])) {
    $produto_id = $_GET['remove'];
    unset($_SESSION['carrinho'][$produto_id]);
}

// Obtendo produtos do banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function finalizarCompra() {
            document.getElementById("mensagem").innerHTML = "Compra finalizada";
            document.getElementById("botaoFinalizar").style.display = "none"; // Esconde o botão após clicar
        }
    </script>
</head>
<body>
    <h1>Produtos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ação</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
            <td>R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></td>
            <td><a href="?add=<?php echo $row['id']; ?>">Adicionar ao Carrinho</a></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Carrinho</h2>
    <ul>
        <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0): ?>
            <?php foreach ($_SESSION['carrinho'] as $id => $quantidade): ?>
                <?php
                $sql = "SELECT * FROM produtos WHERE id = $id";
                $produto = $conn->query($sql)->fetch_assoc();
                ?>
                <li>
                    <?php echo $produto['nome']; ?> - Quantidade: <?php echo $quantidade; ?>
                    <a href="?remove=<?php echo $id; ?>">Remover</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Carrinho vazio!</li>
        <?php endif; ?>
    </ul>

    <button id="botaoFinalizar" onclick="finalizarCompra()">Finalizar Compra</button>
    <p id="mensagem"></p>

</body>
</html>