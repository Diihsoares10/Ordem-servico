<!--   No começo da página   -->
<?php 

include ('conn.php');


$stmt = $conn->prepare('SELECT id, nome, cpf, telefone, cep, rua, bairro, referencia FROM usuario');
    
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <form action="buscar.php" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca">
        <button class="btn btn-outline-success" type="submit">buscar</button>
      </form>
    </nav>
<?php foreach($results as $usuario): ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">cpf</th>
      <th scope="col">telefone</th>
      <th scope="col">cep</th>
      <th scope="col">rua</th>
      <th scope="col">bairro</th>
      <th scope="col">referencia</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $usuario["id"]?></th>
      <td><?= $usuario["nome"] ?></td>
      <td><?= $usuario["cpf"]?></td>
      <td><?= $usuario["telefone"]?></td>
      <td><?= $usuario["cep"]?></td>
      <td><?= $usuario["rua"]?></td>
      <td><?= $usuario["bairro"]?></td>
      <td><?= $usuario["referencia"]?></td>
    </tr>
  </tbody>
</table>

        <?php endforeach; ?>
        <h1>gerar o pdf dos clientes</h1>

<a href="gerar_pdf.php">Gerar PDF</a>
</body>
</html>

<!-- dentro do body faça o código abaixo -->
