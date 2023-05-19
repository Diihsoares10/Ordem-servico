<?php
include 'conn.php';
$pesquisar = ['pesquisa'];
//realizar conexão
$stmt = $conn->prepare("SELECT * FROM service WHERE name LIKE '%'+ $pesquisar + '%'");

$stmt->bindParam(':pesquisa', $pesquisar);
//executar
$stmt->execute();
echo $pesquisar;









?>