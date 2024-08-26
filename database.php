<?php
//Endereço do servidor mysql
$db_server = "localhost";
//Usuário do servidor
$db_user = "root";
//Senha de acesso do usuário
$db_password = "12345opi";
//Nome do banco de dados
$db_name = "teste_db";


try {
  $conn = mysqli_connect($db_server,
  $db_user,
  $db_password,
  $db_name
);
  if($conn) echo "Conexão com o banco de dados estabelecida com sucesso";
}catch(mysqli_sql_exception) {
  echo "Erro ao conectar com o banco de dados";
  
}

?>