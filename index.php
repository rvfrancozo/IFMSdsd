<?php
phpinfo();

$db = new PDO('
pgsql:host=;
port=;
dbname=;
user=;
password=
');

$sql ='CREATE TABLE IF NOT EXISTS data (id serial PRIMARY KEY, nome VARCHAR(50) NOT NULL);';
$db->exec($sql);

$nomes = array('izabel', 'fani', 'vitor', 'carla', 'luis');

print_r($nomes);

?>