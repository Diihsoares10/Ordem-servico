<?php
class Model{
    private $server ="localhost";
    private $username ="root";
    private $pass = "";
    private $database ="ordem_servico";
    private $conn;

    public function __construct(){
        try {
            $this->conn= new mysqli($this->server, $this->username, $this->pass, $this->database);
        } catch (Exception $e) {
            echo "A Conexão falhou!".$e->getMessage();
        }
    }

//Listar o cadastro
public function fetch(){
    $data = null;
    $query = "SELECT * FROM  service";
    if($sql = $this->conn->query($query)){
        while ($row = mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
    }
    return $data;
}


//update

}
?>