<?php

// Carregar o Composer
require './vendor/autoload.php';

// Incluir conexao com BD
include_once 'conn.php';

// QUERY para recuperar os registros do banco de dados
$query_usuarios = "SELECT id, nome, cpf, telefone, cep, rua, bairro, referencia  FROM usuario";

// Prepara a QUERY
$result_usuarios = $conn->prepare($query_usuarios);

// Executar a QUERY
$result_usuarios->execute();

// Informacoes para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<img src='logo.png'>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link rel='stylesheet' href='css/custom.css'";
$dados .= "<title>Celke - Gerar PDF</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Listar os Clientes</h1>";

// Ler os registros retornado do BD
while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuario);
    extract($row_usuario);
    $dados .= "ID: $id <hr> <br>";
    $dados .= "Nome: $nome <hr> <br>";
    $dados .= "CPF: $cpf <hr> <br>";
    $dados .= "TELEFONE: $telefone <hr> <br>";
    $dados .= "CEP: $cep<hr> <br>";
    $dados .= "RUA: $rua <hr> <br>";
    $dados .= "BAIRRO: $bairro <hr> <br>";
    $dados .= "REFERÊNCIA: $referencia <hr> <br>";
    $dados .= "<hr>";
}


$dados .= "Clientes cadastrados";
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
