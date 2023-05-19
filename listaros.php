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
    <link rel="stylesheet" href="css2/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,200;1,500&display=swap" rel="stylesheet">
    <title>Lista</title>
    <style>
        /* Definir uma cor de fundo para a página */
body{
    background-image: url(tec.png);
    background-repeat: no-repeat;
}
  
  /* Estilo para o cabeçalho da página */
nav {
	background-color: black;
  font-family: 'Times New Roman', Times, serif;
	color: white;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 60px;
	font-size: 24px;
  }

nav a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: white
  border-radius: 5px;
  text-decoration: none;
}

nav a:hover {
  background-color: #0062cc;
}
  
  /* Estilo para o título da página */
  h1 {
	font-size: 36px;
	font-weight: bold;
	margin-top: 40px;
  }
  
  /* Estilo para a tabela de dados */
  table {
  border: 6px solid blue;
  width: 100%;
  border-collapse: collapse;
  margin-top: 40px;
  background-color: #333;
  color: white
}

table th {
  background-color: black;
  color: white;
}

table th, table td {
	padding: 12px;
	text-align: left;
	color: white;
}

table tr:nth-child(even) {
  background-color: #555;
}
  
  /* Estilo para o botão "pdf" */
  .badge {
	padding: 6px 12px;
	font-size: 17px;
	font-weight: bold;
	border-radius: 4px;
	text-transform: uppercase;
	color: white;
	background-color: #007bff;
	text-decoration: none;
  }
  
  /* Estilo para as imagens */
  img {
	max-width: 100%;
	height: auto;
	margin-bottom: 20px;
  }
  
.wrapper {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	height: 100vh;
}

.box {
	background-color: #f5f5f5;
	padding: 20px;
	margin: 10px;
	border: 1px solid #ddd;
	border-radius: 5px;
	box-shadow: 2px 2px 5px #ccc;
	text-align: center;
	flex-basis: 300px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
            <div class="text-center">
                    <img src="images/2.png" alt="">
                </div>
                <h1 class="text-center">OS - CADASTRADAS</h1>
            </div>
        </div>
    </div>


    <table class="table">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>email</th>
            <th>telefone</th>
            <th>Endereço</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Serviço</th>
            <th>Descrição</th>
            <th>Data</th>
        </thead>
        <tbody>
            <?php
            include "Model.php";
            $model = new Model();
            $rows = $model->fetch();
            //var_dump($rows);
            if(!empty($rows)){
                foreach ($rows as $row){
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['mail']?></td>
                        <td><?php echo $row['tel']?></td>
                        <td><?php echo $row['endereco']?></td>
                        <td><?php echo $row['logradouro']?></td>
                        <td><?php echo $row['local']?></td>
                        <td><?php echo $row['municipio']?></td>
                        <td><?php echo $row['estado']?></td>
                        <td><?php echo $row['servi']?></td>
                        <td><?php echo $row['descri']?></td>
                        <td><?php echo $row['data']?></td>

                        <td>
                            <a href="pdf.php?id=<?php echo $row['id'];?>" class="badge bg-info p-2">pdf</>
                        </td>
                    </tr>
                    <?php
                }
            }
            
            ?>
            
        </tbody>
    </table>
</body>
</html>