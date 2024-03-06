<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>idade</title>
</head>

<body>
<div>
<form method="post">
<label for="id">Qual idade do jogador? :</label>
<input type="text" name="id">
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php
if ($_POST) {
  $id = $_POST['id'];

switch ($id) {
  case  ($id <= 10):
    echo "infantil ";
    break;


    case ($id < 18):
      echo "junior";
      break;

      case ($id >= 18):
        echo "Adulto";
        break;

      default:
      echo "Sem idade suficiente";
  }
}
?>
</body>