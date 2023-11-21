<?php

include("conexao.php");

if (isset($_POST['consultar'])) {
    $termo = $_POST['consultaTermo'];

    $stmt = $conn->prepare("SELECT * FROM colaboradores WHERE nome LIKE :termo OR cpf LIKE :termo");
    $stmt->bindValue(':termo', '%' . $termo . '%');
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        echo "<h2>Resultados da Consulta:</h2>";
        echo "<ul>";
        foreach ($result as $row) {
            echo "<li>";
            echo "<strong>Nome:</strong> " . $row['nome'] . " | ";
            echo "<strong>CPF:</strong> " . $row['cpf'] . " | ";
            echo "<a href='edicao.php?id=" . $row['id'] . "'>Editar</a>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}
?>