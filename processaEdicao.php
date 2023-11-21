<?php
include("conexao.php");

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $empresa = $_POST['empresa'];
    $cnpj = $_POST['cnpj'];
    $matricula = $_POST['matricula'];
    $statusColab = $_POST['statusColab'];
    $dataAdmissao = $_POST['dataAdmissao'];
    $funcao = $_POST['funcao'];
    $setor = $_POST['setor'];
    $cargaHoraria = $_POST['cargaHoraria'];
    $horario = $_POST['horario'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $dataEmissaoRg = $_POST['dataEmissaoRg'];
    $orgaoExpedidorRg = $_POST['orgaoExpedidorRg'];
    $dataNascimento = $_POST['dataNascimento'];
    $nomeMae = $_POST['nomeMae'];
    $nomePai = $_POST['nomePai'];
    $tituloEleitor = $_POST['tituloEleitor'];
    $zonaTitulo = $_POST['zonaTitulo'];
    $serieTitulo = $_POST['serieTitulo'];
    $dataEmissaoTitulo = $_POST['dataEmissaoTitulo'];
    $pis = $_POST['pis'];
    $dataCadastroPis = $_POST['dataCadastroPis'];
    $numeroCtps = $_POST['numeroCtps'];
    $serieCTPS = $_POST['serieCTPS'];
    $ufCtps = $_POST['ufCtps'];
    $escolaridade = $_POST['escolaridade'];
    $cor = $_POST['cor'];
    $esposo = $_POST['esposo'];
    $cpfEsposo = $_POST['cpfEsposo'];
    $dataNascimentoEsposo = $_POST['dataNascimentoEsposo'];
    $dependentes = $_POST['dependentes'];
    $cpfDependentes = $_POST['cpfDependentes'];
    $dataNascimentoDependentes = $_POST['dataNascimentoDependentes'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dadosBancarios = $_POST['dadosBancarios'];
    $dataAso = $_POST['dataAso'];
    $examesAso = $_POST['examesAso'];
    $medicoAso = $_POST['medicoAso'];
    $empresaAso = $_POST['empresaAso'];

    try {

        $stmt = $conn->prepare("UPDATE colaboradores SET 
            nome = :nome, 
            empresa = :empresa, 
            cnpj = :cnpj, 
            matricula = :matricula, 
            statusColab = :statusColab, 
            dataAdmissao = :dataAdmissao, 
            funcao = :funcao, 
            setor = :setor, 
            cargaHoraria = :cargaHoraria, 
            horario = :horario, 
            cpf = :cpf, 
            rg = :rg, 
            dataEmissaoRg = :dataEmissaoRg, 
            orgaoExpedidorRg = :orgaoExpedidorRg, 
            dataNascimento = :dataNascimento, 
            nomeMae = :nomeMae, 
            nomePai = :nomePai, 
            tituloEleitor = :tituloEleitor, 
            zonaTitulo = :zonaTitulo, 
            serieTitulo = :serieTitulo, 
            dataEmissaoTitulo = :dataEmissaoTitulo, 
            pis = :pis, 
            dataCadastroPis = :dataCadastroPis, 
            numeroCtps = :numeroCtps, 
            serieCTPS = :serieCTPS, 
            ufCtps = :ufCtps, 
            escolaridade = :escolaridade, 
            cor = :cor, 
            esposo = :esposo, 
            cpfEsposo = :cpfEsposo, 
            dataNascimentoEsposo = :dataNascimentoEsposo, 
            dependentes = :dependentes, 
            cpfDependentes = :cpfDependentes, 
            dataNascimentoDependentes = :dataNascimentoDependentes, 
            email = :email, 
            telefone = :telefone, 
            dadosBancarios = :dadosBancarios, 
            dataAso = :dataAso, 
            examesAso = :examesAso, 
            medicoAso = :medicoAso, 
            empresaAso = :empresaAso 
            WHERE id = :id");

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':empresa', $empresa);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':statusColab', $statusColab);
        $stmt->bindParam(':dataAdmissao', $dataAdmissao);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':setor', $setor);
        $stmt->bindParam(':cargaHoraria', $cargaHoraria);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':rg', $rg);
        $stmt->bindParam(':dataEmissaoRg', $dataEmissaoRg);
        $stmt->bindParam(':orgaoExpedidorRg', $orgaoExpedidorRg);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':nomeMae', $nomeMae);
        $stmt->bindParam(':nomePai', $nomePai);
        $stmt->bindParam(':tituloEleitor', $tituloEleitor);
        $stmt->bindParam(':zonaTitulo', $zonaTitulo);
        $stmt->bindParam(':serieTitulo', $serieTitulo);
        $stmt->bindParam(':dataEmissaoTitulo', $dataEmissaoTitulo);
        $stmt->bindParam(':pis', $pis);
        $stmt->bindParam(':dataCadastroPis', $dataCadastroPis);
        $stmt->bindParam(':numeroCtps', $numeroCtps);
        $stmt->bindParam(':serieCTPS', $serieCTPS);
        $stmt->bindParam(':ufCtps', $ufCtps);
        $stmt->bindParam(':escolaridade', $escolaridade);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':esposo', $esposo);
        $stmt->bindParam(':cpfEsposo', $cpfEsposo);
        $stmt->bindParam(':dataNascimentoEsposo', $dataNascimentoEsposo);
        $stmt->bindParam(':dependentes', $dependentes);
        $stmt->bindParam(':cpfDependentes', $cpfDependentes);
        $stmt->bindParam(':dataNascimentoDependentes', $dataNascimentoDependentes);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':dadosBancarios', $dadosBancarios);
        $stmt->bindParam(':dataAso', $dataAso);
        $stmt->bindParam(':examesAso', $examesAso);
        $stmt->bindParam(':medicoAso', $medicoAso);
        $stmt->bindParam(':empresaAso', $empresaAso);

        $stmt->execute();

        echo "Dados atualizados com sucesso!";
    } catch (PDOException $e) {
        echo "Erro na atualização: " . $e->getMessage();
    }
}
?>