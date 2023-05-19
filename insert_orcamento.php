<?php

include "conn.php";

$n = $_POST['nome'];
$s = $_POST['servico'];
$r = $_POST['resultado'];

//preparar
$stmt = $conn->prepare("INSERT INTO orcameto (name, tipo, valor) VALUES (:nome, :servico, :resultado)");

//trocar
$stmt->bindParam(':nome', $n);
$stmt->bindParam(':servico', $s);
$stmt->bindParam(':resultado', $r);

//executar
$stmt->execute();

echo "Dados inseridos com sucesso! <br>
<a href='form.php'>Faça um novo cadastro</a>";

?>