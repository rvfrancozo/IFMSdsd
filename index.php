<?php

$db = pg_connect("host=ec2-52-207-15-147.compute-1.amazonaws.com port=5432 dbname=d7lvjeb4h7lqu6 user=osfcoeysyvqoum password=5320f06bed143660c30634dafc2a78570a1f0423e9cf540615e543e95ba41062");

if($db) {
    echo "<hr>Conectado!<hr>";
}

$table = "CREATE TABLE IF NOT EXISTS dados (id serial PRIMARY KEY, nome VARCHAR(50) NOT NULL)";

$pg_query($db, $table) or die ("Impossível criar a tabela");

$nomes = array('izabel', 'fani', 'vitor', 'carla', 'luis');

foreach($nomes as $nome) {
    $sql = "INSERT INTO dados (nome) VALUES ('$nome')";
    $pg_query($db, $table) or die ("Impossível inserir o nome");
}



?>