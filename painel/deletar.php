<?php
if(isset($_POST['id_membro'])){
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root', '');
    $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
    $sql->execute(array($_POST['id_membro']));
    
} 

if(isset($_POST['id_plano'])){
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root', '');
    $sql = $pdo->prepare("DELETE FROM `tb_planos` WHERE id = ?");
    $sql->execute(array($_POST['id_plano']));
    
} 

?>