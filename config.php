<?php
    $localhost = "bdpainelcms";
    $port = "5432";
    $db = "postgres";
    $user = "postgres";
    $password = "123456";

    $pdo = new PDO("pgsql:host=$localhost;port=$port;dbname=$db;user=$user;password=$password");

    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Conexão falhou: " . $e->getMessage();
    }
?>