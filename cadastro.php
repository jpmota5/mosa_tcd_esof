<?php
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mosa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Use isset para verificar a existência dos índices antes de acessá-los
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
$statusColab = isset($_POST['statusColab']) ? $_POST['statusColab'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$dataAdmissao = isset($_POST['dataAdmissao']) ? $_POST['dataAdmissao'] : '';
$funcao = isset($_POST['funcao']) ? $_POST['funcao'] : '';
$setor = isset($_POST['setor']) ? $_POST['setor'] : '';
$cargaHoraria = isset($_POST['cargaHoraria']) ? $_POST['cargaHoraria'] : '';
$horario = isset($_POST['horario']) ? $_POST['horario'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$rg = isset($_POST['rg']) ? $_POST['rg'] : '';
$dataEmissaoRg = isset($_POST['dataEmissaoRg']) ? $_POST['dataEmissaoRg'] : '';
$orgaoExpedidorRg = isset($_POST['orgaoExpedidorRg']) ? $_POST['orgaoExpedidorRg'] : '';
$dataNascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
$nomeMae = isset($_POST['nomeMae']) ? $_POST['nomeMae'] : '';
$nomePai = isset($_POST['nomePai']) ? $_POST['nomePai'] : '';
$tituloEleitor = isset($_POST['tituloEleitor']) ? $_POST['tituloEleitor'] : '';
$zonaTitulo = isset($_POST['zonaTitulo']) ? $_POST['zonaTitulo'] : '';
$serieTitulo = isset($_POST['serieTitulo']) ? $_POST['serieTitulo'] : '';
$dataEmissaoTitulo = isset($_POST['dataEmissaoTitulo']) ? $_POST['dataEmissaoTitulo'] : '';
$pis = isset($_POST['pis']) ? $_POST['pis'] : '';
$dataCadastroPis = isset($_POST['dataCadastroPis']) ? $_POST['dataCadastroPis'] : '';
$numeroCtps = isset($_POST['numeroCtps']) ? $_POST['numeroCtps'] : '';
$serieCtps = isset($_POST['serieCtps']) ? $_POST['serieCtps'] : '';
$ufCtps = isset($_POST['ufCtps']) ? $_POST['ufCtps'] : '';
$escolaridade = isset($_POST['escolaridade']) ? $_POST['escolaridade'] : '';
$cor = isset($_POST['cor']) ? $_POST['cor'] : '';
$esposo = isset($_POST['esposo']) ? $_POST['esposo'] : '';
$cpfEsposo = isset($_POST['cpfEsposo']) ? $_POST['cpfEsposo'] : '';
$dataNascimentoEsposo = isset($_POST['dataNascimentoEsposo']) ? $_POST['dataNascimentoEsposo'] : '';
$dependentes = isset($_POST['dependentes']) ? $_POST['dependentes'] : '';
$cpfDependentes = isset($_POST['cpfDependentes']) ? $_POST['cpfDependentes'] : '';
$dataNascimentoDependentes = isset($_POST['dataNascimentoDependentes']) ? $_POST['dataNascimentoDependentes'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$dadosBancarios = isset($_POST['dadosBancarios']) ? $_POST['dadosBancarios'] : '';
$dataAso = isset($_POST['dataAso']) ? $_POST['dataAso'] : '';
$examesAso = isset($_POST['examesAso']) ? $_POST['examesAso'] : '';
$medicoAso = isset($_POST['medicoAso']) ? $_POST['medicoAso'] : '';
$empresaAso = isset($_POST['empresaAso']) ? $_POST['empresaAso'] : '';

// Verifique se todos os campos obrigatórios foram preenchidos
/*if (empty($empresa) || empty($cnpj) || empty($matricula) || empty($statusColab) || empty($nome) || empty($dataAdmissao) || empty($funcao) || empty($setor) || empty($cargaHoraria) || empty($horario) || empty($cpf) || empty($rg) || empty($dataEmissaoRg) || empty($orgaoExpedidorRg) || empty($dataNascimento) || empty($nomeMae) || empty($nomePai) || empty($tituloEleitor) || empty($zonaTitulo) || empty($serieTitulo) || empty($dataEmissaoTitulo) || empty($pis) || empty($dataCadastroPis) || empty($numeroCtps) || empty($email) || empty($telefone) || empty($dataAso) || empty($examesAso) || empty($medicoAso) || empty($empresaAso)) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit();
}*/

$stmt = $conn->prepare("INSERT INTO colaboradores (empresa, cnpj, matricula, statusColab, nome, dataAdmissao, funcao, setor, cargaHoraria, horario, cpf, rg, dataEmissaoRg, orgaoExpedidorRg, dataNascimento, nomeMae, nomePai, tituloEleitor, zonaTitulo, serieTitulo, dataEmissaoTitulo, pis, dataCadastroPis, numeroCtps, serieCtps, ufCtps, escolaridade, cor, esposo, cpfEsposo, dataNascimentoEsposo, dependentes, cpfDependentes, dataNascimentoDependentes, email, telefone, dadosBancarios, dataAso, examesAso, medicoAso, empresaAso) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssss", $empresa, $cnpj, $matricula, $statusColab, $nome, $dataAdmissao, $funcao, $setor, $cargaHoraria, $horario, $cpf, $rg, $dataEmissaoRg, $orgaoExpedidorRg, $dataNascimento, $nomeMae, $nomePai, $tituloEleitor, $zonaTitulo, $serieTitulo, $dataEmissaoTitulo, $pis, $dataCadastroPis, $numeroCtps, $serieCtps, $ufCtps, $escolaridade, $cor, $esposo, $cpfEsposo, $dataNascimentoEsposo, $dependentes, $cpfDependentes, $dataNascimentoDependentes, $email, $telefone, $dadosBancarios, $dataAso, $examesAso, $medicoAso, $empresaAso);

// Execute a consulta preparada
if ($stmt->execute()) {
    echo "Dados cadastrados com sucesso.";
} else {
    echo "Erro ao cadastrar os dados: " . $stmt->error;
}

// Feche a declaração e a conexão
$stmt->close();
$conn->close();
?>
