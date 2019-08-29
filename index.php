
<?php 
// Biblioteca para gerar QR Code.
require_once('phpqrcode/qrlib.php');

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$dbname   = "qr_code";
 
// Realizamos a conexão com o bd.
$conn = new PDO(
    'mysql:host='.$servidor.';dbname='.$dbname, $usuario, $senha);

$queryString = 'SELECT * FROM cadastro';
// Retornando todos os registros da tabela cadastro.
$data = $conn->query($queryString);

// Construímos nossa query de consulta.
$queryString = 'SELECT * FROM cadastro';
 
// Rretornando todos os registros da tabela cadastro.
$data = $conn->query($queryString);

// Percorrer cada registro retornado do DB.
foreach ($data as $value) {
    // Nome único para o QR Code.
    $qrCodeName = "imagem_qrcode_{$value['matricula']}.png";

    QRcode::png($value['matricula'], $qrCodeName);
    
    echo "<img src='{$qrCodeName}'>";
}