<?php

// Create connection
$conn = pg_connect("host=ec2-44-207-126-176.compute-1.amazonaws.com port=5432 dbname=dck5m8gitcdan0 user=iasqejvhrjplfr password=1e0dc8cdf49de28794c2a360af6be747bed413729d776374fe513a09e2d16476");
// Check connection
if ($conn) {
    echo "Conectado";
}


?>