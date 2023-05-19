<?php

include "conn.php";

$nme = $_POST['name'];
$cepf = $_POST['cpf'];
$tel = $_POST['phone'];
$cepi = $_POST['cep'];
$ru = $_POST['address'];
$barr = $_POST['bairro'];
$refere = $_POST['reference'];

//echo "$name: $email";

//preparar
$stmt = $conn->prepare("INSERT INTO usuario (nome, cpf, telefone, cep, rua, bairro, referencia) VALUES (:name, :cpf, :phone, :cep, :address, :bairro, :reference)");

//trocar
$stmt->bindParam(':name', $nme);
$stmt->bindParam(':cpf', $cepf);
$stmt->bindParam(':phone', $tel);
$stmt->bindParam(':cep', $cepi);
$stmt->bindParam(':address', $ru);
$stmt->bindParam(':bairro', $barr);
$stmt->bindParam(':reference', $refere);

//executar
$stmt->execute();

echo "Dados inseridos com sucesso! <br>
<a href='os.php'>Faça um novo cadastro</a>";

?>