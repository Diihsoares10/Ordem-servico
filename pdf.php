<?php

// Carregar o Composer
require './vendor/autoload.php';

// Incluir conexao com BD
include_once 'conn.php';
$id = $_GET['id'];
// QUERY para recuperar os registros do banco de dados
$query_usuarios = "SELECT * FROM service WHERE id =".$id;
// Prepara a QUERY
$result_usuarios = $conn->prepare($query_usuarios);

// Executar a QUERY
$result_usuarios->execute();

// Informacoes para o PDF


$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .="<img src='http://localhost/Ordem%20de%20Servi%C3%A7o3/images/tec.jpg' width='100px'>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link rel='stylesheet' href='css/custom.css'";
$dados .= "<title>Ordem de serviço</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Ordem de serviço</h1>";
$dados .= "<p>Rua Pecanha, 53 Calçada <br> Salvador BA</p>";


// Ler os registros retornado do BD
while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuario);
    extract($row_usuario);
    
    $dados .= "<div style='border: 1px solid black;'>NUMERO DA OS: $id</div>";
    $dados .= "<div style='border: 1px solid black;'>NOME: $name </div>";
    $dados .= "<div style='border: 1px solid black;'>EMAIL: $mail </div>";
    $dados .= "<div style='border: 1px solid black;'>TELEFONE: $tel</div>";
    $dados .= "<div style='border: 1px solid black;'>CEP: $endereco</div>";
    $dados .= "<div style='border: 1px solid black;'>RUA: $logradouro</div>";
    $dados .= "<div style='border: 1px solid black;'>BAIRRO:  $local</div>";
    $dados .= "<div style='border: 1px solid black;'>CIDADE: $municipio</div>";
    $dados .= "<div style='border: 1px solid black;'>ESTADO: $estado</div>";
    $dados .= "<div style='border: 1px solid black;'>SERVIÇO A SER REALIZADO: $servi </div>";
    $dados .= "<h3 style='text-align: center;'> DECRIÇÃO DO SERVIÇO:</h3>";
    $dados .= "<div style='border: 1px solid black; padding: 60px; text-align=left';> $descri </div><br>";
    $dados .= "<div style='border: 1px solid black;'>DATA: $data </div><br>";   
    $dados .= "<hr>";
}


$dados .= "Ordem de serviço Iglobe tech";
$dados .= "</body>";


// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$dompdf = new Dompdf(['enable_remote' => true]);

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml($dados);

// Configurar o tamanho e a orientacao do papel
// landscape - Imprimir no formato paisagem
//$dompdf->setPaper('A4', 'landscape');
// portrait - Imprimir no formato retrato
$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();
