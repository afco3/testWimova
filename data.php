<?php

try {
    $db = new PDO('sqlite:sqlite.db', 'admin', 'admin');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connexion echouée : ' . $e->getMessage();
}

if(isset($db)) {

    $req = $db->query("SELECT nom, prenom FROM Users");
    $result = $req->fetchAll();
    echo json_encode($result);
}