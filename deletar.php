<?php
    if(isset($_POST['id_membro'])) {
        $localhost = "localhost";
        $port = "5432";
        $db = "postgres";
        $user = "postgres";
        $password = "1fd31e#I";
    
        $pdo = new PDO("pgsql:host=$localhost;port=$port;dbname=$db;user=$user;password=$password");

        $sql = $pdo->prepare("DELETE FROM tb_equipe WHERE id = ?");
        $sql->execute(array($_POST['id_membro']));
    }
?>