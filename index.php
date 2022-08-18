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
 )") or die("fail");

$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('izabel')")or die("fail1");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('fani')")or die("fail2");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('carla')")or die("fail3");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('victor')")or die("fail4");
$dados = pg_query($bdcon, "INSERT INTO dados (nome) VALUES('luis')")or die("fail5");

$dados = pg_query($bdcon, "SELECT * FROM dados")or die("fail6");

print_r($dados);

?>