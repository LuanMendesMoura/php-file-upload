<?php 

require_once __DIR__ . "/../database/Database.php";

class ArquivosModel {

    private $conn;
    private $tabela = "imagens";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function criar($imagem) {
        $query = "INSERT INTO $this->tabela (nome, nome_original, caminho) VALUES (:nome, :nome_original, :caminho)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome',$imagem['nome']);
        $stmt->bindParam(':nome_original',$imagem['nome_original']);
        $stmt->bindParam(':caminho',$imagem['caminho']);

        return $stmt->execute();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->fetch();
    }
}