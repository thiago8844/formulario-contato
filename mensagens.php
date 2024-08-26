<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensagens</title>
</head>

<body>
  <?php
  require("database.php");
  $sql = "SELECT * FROM respostas";

  $resps = mysqli_fetch_all(mysqli_query($conn, $sql));
  echo "<br>";
  echo "<br>";
  if (count($resps) > 0) {
    foreach ($resps as $r) {
      echo "ID: {$r[0]} <br> Nome: {$r[1]} <br> E-mail: {$r[2]} <br> Telefone: {$r[3]} <br> Assunto: {$r[4]} <br> Data: {$r[5]} <br> Mensagem: <br> <p>{$r[6]}<p> <br> <br> ";
      // print_r($r);

    }
  }
  mysqli_close($conn);
  ?>
</body>

</html>