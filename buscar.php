<?php
include ('conn.php');

$buscar = $_POST['busca'];
$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();
?>
<div class="container">
	<h2>Resultado da busca</h2>
	<?php foreach($search as $key => $value): ?>
		<h5 class="card-title">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["nome"] ?>
		</a>
		</h5>
	<?php endforeach; ?>
</div>