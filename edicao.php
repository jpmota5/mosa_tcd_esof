<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição de Colaborador</title>
  <link rel="stylesheet" href="styleEdicao.css">
</head>
<body>
    <h1>Edição de Colaborador</h1>
    <?php
    include("conexao.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM colaboradores WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result) {

            echo "<form action='processa_edicao.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $result['id'] . "'>";

            echo "<label for='empresa'>Empresa:</label>";
            echo "<input type='text' id='empresa' name='empresa' value='" . $result['empresa'] . "' required>";

            echo "<label for='cnpj'>CNPJ da empresa:</label>";
            echo "<input type='text' id='cnpj' name='cnpj' value='" . $result['cnpj'] . "' required>";

            echo "<label for='matricula'>Matrícula:</label>";
            echo "<input type='number' id='matricula' name='matricula' value='" . $result['matricula'] . "' required>";

            echo "<label for='statusColab'>Status:</label>";
            echo "<input type='text' id='statusColab' name='statusColab' value='" . $result['statusColab'] . "' required>";

            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' id='nome' name='nome' value='" . $result['nome'] . "' required>";

            echo "<label for='dataAdmissao'>Data de admissão:</label>";
            echo "<input type='date' id='dataAdmissao' name='dataAdmissao' value='" . $result['dataAdmissao'] . "' required>";

            echo "<label for='funcao'>Função:</label>";
            echo "<input type='text' id='funcao' name='funcao' value='" . $result['funcao'] . "' required>";

            echo "<label for='setor'>Setor:</label>";
            echo "<input type='text' id='setor' name='setor' value='" . $result['setor'] . "' required>";

            echo "<label for='cargaHoraria'>Carga horária:</label>";
            echo "<input type='number' id='cargaHoraria' name='cargaHoraria' value='" . $result['cargaHoraria'] . "' required>";

            echo "<label for='horario'>Horário de trabalho:</label>";
            echo "<input type='text' id='horario' name='horario' value='" . $result['horario'] . "' required>";

            echo "<label for='cpf'>CPF:</label>";
            echo "<input type='text' id='cpf' name='cpf' value='" . $result['cpf'] . "' required>";

            echo "<label for='rg'>RG:</label>";
            echo "<input type='text' id='rg' name='rg' value='" . $result['rg'] . "' required>";

            echo "<label for='dataEmissaoRg'>RG - Data de emissão:</label>";
            echo "<input type='date' id='dataEmissaoRg' name='dataEmissaoRg' value='" . $result['dataEmissaoRg'] . "' required>";

            echo "<label for='orgaoExpedidorRg'>RG - Orgão Expedidor:</label>";
            echo "<input type='text' id='orgaoExpedidorRg' name='orgaoExpedidorRg' value='" . $result['orgaoExpedidorRg'] . "' required>";

            echo "<label for='dataNascimento'>Data de nascimento:</label>";
            echo "<input type='date' id='dataNascimento' name='dataNascimento' value='" . $result['dataNascimento'] . "' required>";

            echo "<label for='nomeMae'>Nome da mãe:</label>";
            echo "<input type='text' id='nomeMae' name='nomeMae' value='" . $result['nomeMae'] . "' required>";

            echo "<label for='nomePai'>Nome do pai:</label>";
            echo "<input type='text' id='nomePai' name='nomePai' value='" . $result['nomePai'] . "' required>";

            echo "<label for='tituloEleitor'>Título de eleitor:</label>";
            echo "<input type='text' id='tituloEleitor' name='tituloEleitor' value='" . $result['tituloEleitor'] . "' required>";

            echo "<label for='zonaTitulo'>Título - Zona:</label>";
            echo "<input type='text' id='zonaTitulo' name='zonaTitulo' value='" . $result['zonaTitulo'] . "' required>";

            echo "<label for='serieTitulo'>Título - Série:</label>";
            echo "<input type='text' id='serieTitulo' name='serieTitulo' value='" . $result['serieTitulo'] . "' required>";

            echo "<label for='dataEmissaoTitulo'>Título - Data de emissão:</label>";
            echo "<input type='date' id='dataEmissaoTitulo' name='dataEmissaoTitulo' value='" . $result['dataEmissaoTitulo'] . "' required>";

            echo "<label for='pis'>PIS/NIS/NIT:</label>";
            echo "<input type='text' id='pis' name='pis' value='" . $result['pis'] . "' required>";

            echo "<label for='dataCadastroPis'>PIS - Data de cadastro:</label>";
            echo "<input type='date' id='dataCadastroPis' name='dataCadastroPis' value='" . $result['dataCadastroPis'] . "' required>";

            echo "<label for='numeroCtps'>CTPS - Número:</label>";
            echo "<input type='text' id='numeroCtps' name='numeroCtps' value='" . $result['numeroCtps'] . "' required>";

            echo "<label for='serieCTPS'>CTS- Série:</label>";
            echo "<input type='text' id='serieCTPS' name='serieCTPS' value='" . $result['serieCTPS'] . "'>";

            echo "<label for='ufCtps'>CTPS - UF:</label>";
            echo "<input type='text' id='ufCtps' name='ufCtps' value='" . $result['ufCtps'] . "'>";

            echo "<label for='escolaridade'>Escolaridade:</label>";
            echo "<input type='text' id='escolaridade' name='escolaridade' value='" . $result['escolaridade'] . "' required>";

            echo "<label for='cor'>Cor/Raça:</label>";
            echo "<input type='text' id='cor' name='cor' value='" . $result['cor'] . "' required>";

            echo "<label for='esposo'>Esposo(a):</label>";
            echo "<input type='text' id='esposo' name='esposo' value='" . $result['esposo'] . "'>";

            echo "<label for='cpfEsposo'>Esposa(a) - CPF:</label>";
            echo "<input type='text' id='cpfEsposo' name='cpfEsposo' value='" . $result['cpfEsposo'] . "'>";

            echo "<label for='dataNascimentoEsposo'>Esposo(a) - Data de nascimento:</label>";
            echo "<input type='date' id='dataNascimentoEsposo' name='dataNascimentoEsposo' value='" . $result['dataNascimentoEsposo'] . "'>";

            echo "<label for='dependentes'>Dependentes:</label>";
            echo "<input type='text' id='dependentes' name='dependentes' value='" . $result['dependentes'] . "'>";

            echo "<label for='cpfDependentes'>Dependentes - CPF:</label>";
            echo "<input type='text' id='cpfDependentes' name='cpfDependentes' value='" . $result['cpfDependentes'] . "'>";

            echo "<label for='dataNascimentoDependentes'>Dependentes - Data de nascimento:</label>";
            echo "<input type='text' id='dataNascimentoDependentes' name='dataNascimentoDependentes' value='" . $result['dataNascimentoDependentes'] . "'>";

            echo "<label for='email'>Email:</label>";
            echo "<input type='text' id='email' name='email' value='" . $result['email'] . "' required>";

            echo "<label for='telefone'>Telefone:</label>";
            echo "<input type='text' id='telefone' name='telefone' value='" . $result['telefone'] . "' required>";

            echo "<label for='dadosBancarios'>Dados bancários:</label>";
            echo "<input type='text' id='dadosBancarios' name='dadosBancarios' value='" . $result['dadosBancarios'] . "'>";

            echo "<label for='dataAso'>ASO - Data:</label>";
            echo "<input type='date' id='dataAso' name='dataAso' value='" . $result['dataAso'] . "' required>";

            echo "<label for='examesAso'>ASO - Exames:</label>";
            echo "<input type='text' id='examesAso' name='examesAso' value='" . $result['examesAso'] . "' required>";

            echo "<label for='medicoAso'>ASO - Médico:</label>";
            echo "<input type='text' id='medicoAso' name='medicoAso' value='" . $result['medicoAso'] . "' required>";

            echo "<label for='empresaAso'>ASO - Empresa:</label>";
            echo "<input type='text' id='empresaAso' name='empresaAso' value='" . $result['empresaAso'] . "' required>";

            echo "<button type='submit' name='editar'>Salvar Edições</button>";
            echo "</form>";
        } else {
            echo "Colaborador não encontrado.";
        }
    } else {
        echo "ID do colaborador não fornecido.";
    }
    ?>
</body>
</html>