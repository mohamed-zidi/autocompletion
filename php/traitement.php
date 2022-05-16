<?php
require_once './Bdd.php';
// if(isset($_POST['btn'])){
    // header('location:./php/traitement.php');
    // $search = $_POST['search'];

$connect = new Bdd;
$j = $connect->getAll();

$json = json_encode($j);
echo $json;
// }
