<?php

include "conn.php";

$n = $_POST['nome'];
$e = $_POST['email'];
$t = $_POST['telefone'];
$c = $_POST['cep'];
$r = $_POST['rua'];
$b = $_POST['bairro'];
$city = $_POST['cidade'];
$est = $_POST['uf'];
$s = $_POST['servico'];
$d = $_POST['descricao'];
$dt = $_POST['data'];


//preparar
$stmt = $conn->prepare("INSERT INTO service (name, mail, tel, endereco, logradouro, local, municipio, estado,  servi, descri, data) VALUES (:nome, :email, :telefone, :cep, :rua, :bairro, :cidade, :uf, :servico, :descricao, :data)");

//trocar
$stmt->bindParam(':nome', $n);
$stmt->bindParam(':email', $e);
$stmt->bindParam(':telefone', $t);
$stmt->bindParam(':cep', $c);
$stmt->bindParam(':rua', $r);
$stmt->bindParam(':bairro', $b);
$stmt->bindParam(':cidade', $city);
$stmt->bindParam(':uf', $est);
$stmt->bindParam(':servico', $s);
$stmt->bindParam(':descricao', $d);
$stmt->bindParam(':data', $dt);
//executar
$stmt->execute();

echo "Dados inseridos com sucesso! <br>
<a href='form.php'>Faça um novo cadastro</a><br>";
echo "Voltar ao inicio<br><a href='dashboard.php'>HOME</a>";

?>