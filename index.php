<?php

$bd = pg_connect("host=ec2-52-207-15-147.compute-1.amazonaws.com port=5432 dbname=d7lvjeb4h7lqu6 user=osfcoeysyvqoum password=5320f06bed143660c30634dafc2a78570a1f0423e9cf540615e543e95ba41062");

if($bd) {
    echo "<hr>CONECTADO<hr>";
}

$tabela = ("CREATE TABLE IF NOT EXISTS dados (id serial PRIMARY KEY, nome VARCHAR(50) NOT NULL)");

pg_query($bd, $tabela);

$nomes = array("Izabel", "Victor", "Fani", "Rafael");

foreach($nomes as $nome) {
    $sql = "INSERT INTO dados (nome) VALUES ('$nome')";
    pg_query($bd, $sql);
}

$consulta = pg_query($bd, "SELECT * FROM dados");

while ($row = pg_fetch_row($consulta)) {
    echo "ID: $row[0]  Nome: $row[1]";
    echo "<br>";
  }

pg_query($db,"DROP TABLE dados");

?>