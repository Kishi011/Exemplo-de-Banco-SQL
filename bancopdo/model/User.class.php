<?php
require_once 'conexao.php';

class User{
    public $id;
    public $nome;
    public $email;
    public $senha;

    function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    function get_id(){ return $this->id; }
    function get_nome(){ return $this->nome; }
    function get_email(){ return $this->email; }
    function get_senha(){ return $this->senha; }

    public function acessar(){
        $sql = "SELECT * FROM Users WHERE email=$this->get_email() AND senha=$this->get_senha()";
        $res = $conn->prepare($sql);
        if($res->execute()){
            if($res->rowCount()>0){
                session_start();
                $_SESSION['email'] = $this->email;
                $_SESSION['senha'] = $this->senha;
                header('location:../restrito.php');
            } else{
                    session_unset();
                    session_destroy();
                    header('location:../index.php');
            }
        }
            
    }
}

?>