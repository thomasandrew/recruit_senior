<?php

class Information {

    private $pdo;

    public function connect($name, $host, $user, $pass) {
        global $pdo;

        try {

            $pdo = new PDO("mysql:dbname=".$name.";host=".$host,$user,$pass);
            
        } catch (PDOException $e) {

            die($e->getMessage());

        }
    }

    public function queryBiulder($name, $tel, $cpf) {
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO recruit_tb (nome,telefone,cpf) VALUES (:n, :t, :c)");

        $sql->bindValue(":n",$name);
        $sql->bindValue(":t",$tel);
        $sql->bindValue(":c",$cpf);

        $sql->execute();

      return true;  
    }
  
}  


