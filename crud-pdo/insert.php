<?php
echo "Inserindo dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $nome = $_POST["nome"] . '<br>';
    echo $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro ($conexao, $id, $descricao, $Situacao, $nome_responsavel) {
        $sql = "INSERT INTO Tarefa (descricao, situacao, nome_responsave) VALUES (:descricao, :situacao, :nome_responsave)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':descricao,', $$descricao, PDO::PARAM_STR);
        $stmt->bindParam(':email', $$Situacao, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $nome_responsavel, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($conexao, $id, $descricao, $Situacao, $nome_responsavel)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='cadastro.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>



