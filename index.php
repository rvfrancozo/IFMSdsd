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


?>