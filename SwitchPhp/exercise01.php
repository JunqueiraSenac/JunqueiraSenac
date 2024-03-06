<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cores</title>
</head>

<body>
<div>
<form method="post">
<label for="cor">Qual sua cor favorita? :</label>
<input type="text" name="cor">
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php
if ($_POST) {
  $cor = $_POST['cor'];
}
switch ($cor) {
  case "vermelho":
    echo "Sua cor favorita é vermelho!";
    break;

  case "amarelo":
    echo "Sua cor favorita é amarelo!";
    break;

  case "verde":
    echo "Sua cor favorita é verde!";
    break;

  default:
    echo "Sua cor favorita não é nem vermelho nem verde nem amarelo!";
  }

?>
</body>




