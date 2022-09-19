<?php
require_once 'conexao.php';

class Produto {

    public $id = '';
    public $nome = '';
    public $descricao = '';
    public $preco = '';

    // construtor
    function __construct($nome, $descricao, $preco){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    // métodos
    function get_id(){return $this->id;}
    function get_nome(){return $this->nome;}
    function get_descricao(){return $this->descricao;}
    function get_preco(){return $this->preco;}

    public function imprimeProduto(){
        $sql = "SELECT * FROM Sorvetes";
        $res = $conn->prepare($sql);
        $res->execute();
        while($linha = $res->fetch(PDO::FETCH_OBJ)){
            echo "<tr>";
                echo "<td>".$linha->id."</td>";
                echo "<td>".$linha->nome."</td>";
                echo "<td>".$linha->descricao."</td>";
                echo "<td>".$linha->preco."</td>";
                echo "<td>
                <a href='edit.php?id=$linha->id'>Editar</a> /
                <a href='del.php?id=$linha->id'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}
?>