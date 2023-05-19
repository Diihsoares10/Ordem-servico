<?php
session_start();

// Verifica se o usuário quer remover um item do carrinho
if (isset($_GET['remover'])) {
    $indice = $_GET['remover'];
    if (isset($_SESSION['carrinho'][$indice])) {
        unset($_SESSION['carrinho'][$indice]);
        echo "Item removido do carrinho com sucesso.";
    }
}

$items = array(
    ['nome' => 'Camera intelbras 112', 'preco' => '139.80'],
    ['nome' => 'DVR Intelbra MHDX - 04 canais', 'preco' => '528.30'],
    ['nome' => 'DVR Intelbra MHDX - 08 canais', 'preco' => '729.18'],
    ['nome' => 'DVR Intelbra MHDX - 16 canais', 'preco' => '1318.00'],
    ['nome' => 'DVR Intelbra MHDX - 32 canais', 'preco' => '3360.20'],
    ['nome' => 'Camera intelbras 112', 'preco' => '139.80'],
    ['nome' => 'Cabo de rede 100% 100 mt', 'preco' => '220.00'],
    ['nome' => 'Cabo Coaxial 4mm 100 mt', 'preco' => '130.00'],
    ['nome' => 'Balun de Video Intelbras', 'preco' => '26.30'],
    ['nome' => 'Balun de Video Fozgood', 'preco' => '18.60'],
    ['nome' => 'Cabo p4', 'preco' => '3.00'],
    ['nome' => 'Caixa hermetica', 'preco' => '7.50'],
    ['nome' => 'Fonte alimentação 12v 5 A', 'preco' => '79.00'],
    ['nome' => 'Fonte alimentação 12v 10 A', 'preco' => '110.00'],
    ['nome' => 'Fonte alimentação 12v 20 A', 'preco' => '159.00'],
    ['nome' => 'HD 500 GB', 'preco' => '190.00'],
    ['nome' => 'HD 1 TB Purple', 'preco' => '470.00'],
    ['nome' => 'Rack 3-U', 'preco' => '280.00'],
    ['nome' => 'Rack 5-V', 'preco' => '330.00'],
    ['nome' => 'Câmera Mibo Instalado', 'preco' => '350.00'],
    ['nome' => 'Câmera robo c/ Cartão de memoria 32GB', 'preco' => '370.00']
);


// Verifica se o usuário quer adicionar um item ao carrinho
if (isset($_GET['adicionar'])) {
    $idProduto = (int) $_GET['adicionar'];
    if (isset($items[$idProduto])) {
        if (isset($_SESSION['carrinho'][$idProduto])) {
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        } else {
            $_SESSION['carrinho'][$idProduto] = array(
                'quantidade' => 1,
                'preco' => $items[$idProduto]['preco'],
                'nome' => $items[$idProduto]['nome']
            );
        }
    } else {
        die('Produto não existe.');
    }
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Teste Carrinho</title>
</head>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: rgba(245, 241, 241, 0.8);
    padding: 10px;
    border: 1px solid rgba(65, 100, 197, 0.2);
    box-shadow: 0px 0px 10px rgba(65, 100, 197, 0.2);
}

body{
    background-image: url(tec.png);
    background-repeat: no-repeat;
}


h2.titulo{
    background-color: #4e57a7;
    width: 100%;
    padding: 20px;
    text-align: center;
    color: beige;
}

.carrinho-conteiner{
    display: flex;
    padding: 8px 16px;
}
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
  
  /* Estilo para o botão de remover no carrinho */
  .produto a:nth-child(2) {
    background-color: #4e57a7;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
  }

  a{
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
    background-color: red;
    color: white;
  }
  
  /* Estilo para o container do carrinho */
  .carrinho-container {
    display: flex;
    flex-wrap: wrap;
  }
  
  /* Estilo para o subtotal de cada produto no carrinho */
  p {
    margin-bottom: 5px;
    
  }
  
  /* Estilo para o botão de remover no carrinho abaixo do subtotal */
  p a {
    font-size: 14px;
    color: red;
    text-decoration: none;
  }
  
  /* Estilo para o total do carrinho */
  h2:nth-child(3) {
    margin-top: 30px;
    font-size: 28px;
    font-weight: bold;
  }
  
</style>

<body>
    <h2 class="titulo">Carrinho PHP</h2>
    <div class="carrinho-container">
        <?php foreach ($items as $key => $value) { ?>
            <div class="produto">
                <h5><?php echo $value['nome'] ?></h5>
                <a href="?adicionar=<?php echo $key ?>">Adicionar</a>
                <?php if (isset($_SESSION['carrinho'][$key])) : ?>
                    <a href="?remover=<?php echo $key ?>">Remover</a>
                <?php endif; ?>
            </div>
        <?php } ?>
    </div>

    <h2 class="titulo">Carrinho:</h2>

    <?php foreach ($_SESSION['carrinho'] as $key => $value) {
        $subtotal = $value['quantidade'] * $value['preco'];
        $total += $subtotal;
        ?>
        <p>Nome: <?php echo $value['nome'] ?> | Quantidade: <?php echo $value['quantidade'] ?> | Preço: <?php echo $subtotal ?></p>
        <a href="?remover=<?php echo $key ?>">Remover</a>
    <?php } ?>

    <h2 class="titulo">Total: <?php echo $total ?></h2>
    <a href="pdforcamento.php">pdf</a>

</body>

</html>
