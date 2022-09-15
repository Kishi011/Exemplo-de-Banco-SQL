<?php

require_once 'conexao.php';

class Pessoa{

    function __constructor(mysqli $mysqli){

        $this->mysql = $mysqli;
    }

}

?>