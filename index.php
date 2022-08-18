<?php
//phpinfo();

$bdcon = pg_connect("
host=ec2-52-207-15-147.compute-1.amazonaws.com 
port=5432 
dbname=d7lvjeb4h7lqu6 
user=osfcoeysyvqoum 
password=5320f06bed143660c30634dafc2a78570a1f0423e9cf540615e543e95ba41062
");

if($bdcon) {
    echo "Conectado com sucesso!";
}

$tabela = pg_query($bdcon, "CREATE TABLE IF NOT EXISTS dados (
    id serial PRIMARY KEY,
    nome VARCHAR(50) NOT NULL  
 )");

$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('izabel')");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('fani')");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('carla')");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('victor')");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('luis')");

$dados = pg_query($bdcon, "SELECT * FROM dados");

print_r($dados);

?>