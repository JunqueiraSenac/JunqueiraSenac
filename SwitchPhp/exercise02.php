<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sorteio</title>
</head>

<body>
<div>
<form method="post">
<label for="sort">Qual numéro de sua rifa? :</label>
<input type="text" name="sort">
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php
if ($_POST) {
  $sort = $_POST['sort'];

switch ($sort) {
  case "1":
    echo "Você é ganhou um Playstation 5!";
    break;

    case "2":
      echo "Você ganhou uma bicicleta!";
    break;

    case "3":
      echo "Você ganhou um Ocúlos!";
      break;

      default:
      echo "Infelismente Você não ganhou nada";
  }
}
?>
</body>




