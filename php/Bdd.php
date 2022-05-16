<?php

class Bdd {

    private $pdo;

    public function __construct(){

        try{

            $this->pdo = new PDO ('mysql:host=localhost;dbname=autocompletion',
            'root',
            '');
        } catch(Exception $e){
            
            die('Erreur : ' . $e->getMessage());
        }

    }

    public function getAll(){

        $query = "SELECT * FROM `top2018`";

        $q = $this->pdo->prepare($query);
        $q->execute();
        $results = $q->fetchAll(PDO::FETCH_ASSOC);
        return $results;
        // $json = json_encode($results);
        // // var_dump($json);
        // return $json;
        
    }

    public function search($search){

        $query = "SELECT * FROM `top2018` WHERE `id` = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array($search));
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;


    }
}