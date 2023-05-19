
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastros Para OS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="main-container">
    <h1>Cadastre-se </h1>
    <form action="Model.php" method="post">
      <div class="full-box">
        
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
        <label for="cpf">CPF/CNPJ</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF/CNPJ" data-required >
      </div>
      <div class="half-box">
        <label for="phone">Telefone</label>
        <input type="text" name="phone" id="phone" placeholder="Digite seu Telefone" data-required >
      </div>
      <div class="half-box spacing">
        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" data-required>
      </div>
      <div class="full-box">
        <label for="address">Endereço completo</label>
        <input type="text" name="address" id="address" placeholder="Digite seu endereço completo" data-required>
      </div>
      <div class="full-box">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro" data-required>
      </div>
      <div class="full-box">
        <label for="reference">Ponto de referência</label>
        <input type="text" name="reference" id="reference" placeholder="Digite um ponto de referência" data-required>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>