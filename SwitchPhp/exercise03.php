<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produto</title>
</head>

<body>
<div>
<form method="post">
<label for="ped">Qual código do produto? :</label>
<input type="text" name="ped">
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php
if ($_POST) {
  $ped = $_POST['ped'];

switch ($ped) {
  case "100":
    echo "Hámburguer ";
    echo "R$:10,00";
    break;

    case "101":
      echo "Cachorro-quente ";
      echo "R$:15,00";
    break;

    case "102":
      echo "Pastel ";
      echo "R$:5,00";
      break;

      default:
      echo "Produto não listado";
  }
}
?>
</body>