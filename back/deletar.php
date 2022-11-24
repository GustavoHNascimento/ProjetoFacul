<?php
    include "conexao.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `principal` where id=$id";
        $conn->query($sql);
    }
    header('location:/principal/index.php');
    exit;
?>