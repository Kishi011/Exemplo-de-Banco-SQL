<?php
// session_start();

// $servername = 'localhost';
// $username = 'root';
// $pwd = '';
// $dbname = 'sorveteria';

// try{
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pwd);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch(PDOException $e){
//     echo "Error: ". $e->getMessage();
// }

class Conexao{
    private $conn;

    function get_conexao(){
        $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try{
            $this->conn = new PDO("mysql:host='localhost';dbname=sorveteria", 'root', '', $opcoes);
        } catch(PDOException $e){
            echo $e->getMessage();
        }

        return $this->conn;
    }
}

?>