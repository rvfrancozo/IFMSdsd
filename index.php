<?php 
include("conexao.php");

$consulta = "SELECT * FROM usuario";

$tabela = ("CREATE TABLE IF NOT EXISTS dados (id serial PRIMARY KEY, nome VARCHAR(50) NOT NULL)");

pg_query($conn, $tabela);

$nomes = array("Izabel", "Victor", "Fani", "Rafael");

foreach($nomes as $nome) {
    $sql = "INSERT INTO dados (nome) VALUES ('$nome')";
    pg_query($conn, $sql);
}

$consulta = pg_query($conn, "SELECT * FROM dados");

?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Lista de nomes</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>ID</td> 
          <td>Nome</td>  
        </tr> 
        
        <?php while($row = $consulta->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nome']; ?></td>   
          
        </tr> 
        <?php pg_query($db,"DROP TABLE dados"); } ?> 
      </table> 
    </body> 
</html>