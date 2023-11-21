<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mosa";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['consultar'])) {
        $busca = $_POST['busca'];

        $sql = "SELECT * FROM colaboradores WHERE nome LIKE :busca OR cpf LIKE :busca";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':busca', "%$busca%");
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<h2>Resultados da Consulta:</h2>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<ul>";
                $formValues = [
                    "Empresa" => $row['empresa'],
                    "CNPJ" => $row['cnpj'],
                    "Matrícula" => $row['matricula'],
                    "Status" => $row['statusColab'],
                    "Nome" => $row['nome'],
                    "Data de Admissão" => $row['dataAdmissao'],
                    "Função" => $row['funcao'],
                    "Setor" => $row['setor'],
                    "Carga Horária" => $row['cargaHoraria'],
                    "Horário de Trabalho" => $row['horario'],
                    "CPF" => $row['cpf'],
                    "RG" => $row['rg'],
                    "Data de Emissão do RG" => $row['dataEmissaoRg'],
                    "Orgão Expedidor do RG" => $row['orgaoExpedidorRg'],
                    "Data de Nascimento" => $row['dataNascimento'],
                    "Nome da Mãe" => $row['nomeMae'],
                    "Nome do Pai" => $row['nomePai'],
                    "Título de Eleitor" => $row['tituloEleitor'],
                    "Zona do Título" => $row['zonaTitulo'],
                    "Série do Título" => $row['serieTitulo'],
                    "Data de Emissão do Título" => $row['dataEmissaoTitulo'],
                    "PIS/NIS/NIT" => $row['pis'],
                    "Data de Cadastro do PIS" => $row['dataCadastroPis'],
                    "Número da CTPS" => $row['numeroCtps'],
                    "Série da CTPS" => $row['serieCTPS'],
                    "UF da CTPS" => $row['ufCtps'],
                    "Escolaridade" => $row['escolaridade'],
                    "Cor/Raça" => $row['cor'],
                    "Esposo(a)" => $row['esposo'],
                    "CPF do Esposo(a)" => $row['cpfEsposo'],
                    "Data de Nascimento do Esposo(a)" => $row['dataNascimentoEsposo'],
                    "Dependentes" => $row['dependentes'],
                    "CPF dos Dependentes" => $row['cpfDependentes'],
                    "Data de Nascimento dos Dependentes" => $row['dataNascimentoDependentes'],
                    "Email" => $row['email'],
                    "Telefone" => $row['telefone'],
                    "Dados Bancários" => $row['dadosBancarios'],
                    "Data do ASO" => $row['dataAso'],
                    "Exames do ASO" => $row['examesAso'],
                    "Médico do ASO" => $row['medicoAso'],
                    "Empresa do ASO" => $row['empresaAso'],
                ];

                foreach ($formValues as $label => $value) {
                    echo "<li>$label: $value</li>";
                }
                echo "</ul>";
            }
        } else {
            echo "<p>Nenhum colaborador encontrado.</p>";
        }
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
}
?>