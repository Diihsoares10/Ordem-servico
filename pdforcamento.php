<?php
require_once './vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de compras</title>
  <style>
    /* Estilo para o título dos carrinhos */
    .titulo {
        font-size: 24px;
        font-weight: bold;
        margin-top: 30px;
    }
  
    /* Estilo para o botão de adicionar no carrinho */
    .produto a:nth-child(1) {
        background-color: #4e57a7;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 4px;
    }
  </style>
</head>
<body>
  <h2 class="titulo">Carrinho de compras</h2>
  <table>
    <thead>
      <tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
';

$total = 0; //inicializa a variável $total

foreach ($_SESSION['carrinho'] as $idProduto => $item) {
    $nome = $item['nome'];
    $quantidade = $item['quantidade'];
    $preco = $item['preco'];
    $totalItem = $quantidade * $preco;
    $total += $totalItem;

    $html .= "
      <tr>
        <td>{$nome}</td>
        <td>{$quantidade}</td>
        <td>R$ " . number_format($preco, 2, ',', '.') . "</td>
      </tr>
    ";
}

$html .= "
    </tbody>
  </table>
  <p>Total: R$ " . number_format($total, 2, ',', '.') . "</p>
</body>
</html>
";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->output();
$dompdf->stream('carrinho.pdf', array("Attachment" => false)); //output() deve ser chamado antes do stream()
?>