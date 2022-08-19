<?php

$bd = pg_connect("host=ec2-52-207-15-147.compute-1.amazonaws.com port=5432 dbname=dcq5g80r262obf user=cxgrwgythnbvfy password=3705692aa2824da418c1ab72c5e7bf242e4f8c8af64371f016b70fd77de65730");

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