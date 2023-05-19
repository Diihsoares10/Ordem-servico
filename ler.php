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
    <link rel="stylesheet" href="css3/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,200;1,500&display=swap" rel="stylesheet">
    <title>Ler registro</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12 mt-4">
        <div class="text-center">
            <img src="images/4.png" alt="">
        </div>
            <h1 class="text-center">OS</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <?php
                include 'Model.php';
                $model = new Model();
                $id = $_REQUEST['id'];
                $row = $model->fetch_unico($id);
                if(!empty($row)){
                ?>
                <div class="card-header">
                Nome: <?php echo $row['name']; ?>
                </div>
                <div class="card-body">
                E-mail: <?php echo $row['mail']; ?>|
                Whatsapp: <?php echo $row['tel']; ?>|
                Endereço: <?php echo $row['rua']; ?>|
                Tipo de serviço: <?php echo $row['servi']; ?>|
                Descrição: <?php echo $row['descri']; ?>|
                Data: <?php echo $row['data']; ?>|
                
                </div>
                <?php
}else{
    echo "Sem registro!";
}
?>
            </div>
        </div>      
    </div>
</body>
</html>