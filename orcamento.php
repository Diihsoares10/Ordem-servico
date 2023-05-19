<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <div class="full-box">
        <label for="name">Nome do cliente</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" data-min-length="2" data-email-validate>
      </div>
      <h1>Tipo de seriço</h1>
      <select id="servico" name="servico" placeholder="Selecione o serviço">
       
			<option value="">--Selecione--</option>
			<option value="camera">Camera</option>
			<option value="alarme">Alarme</option>
			<option value="cerca">Cerca</option>
		</select><br><br>
        <h1>escolho a quantidade de cameras</h1>
        <label for="quantidade">Quantidade</label>
    <input type="number" id="quantidade" name="qtd" min="1" max="100" value="1">
    <br>
    </div>
   <label name="resultado"><?php $resultado = $_POST['qtd'] * '1500'?></label>
    <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>

      <?php
      $n1 = $_POST['qtd'];
      $q = '139.80';
      $result = $n1 * $q;
      $n = $_POST['nome'];
      $s = $_POST['servico'];
      echo nl2br ($result);

      ?>
    </form>
</body>
</html>