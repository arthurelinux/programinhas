<!DOCTYPE html>
<html>
<head>
<title> Hash</title>
<meta charset="utf-8">
</head>
<body>
<form method="post" action="">
<input type="text" name="senha" placeholder="senha a ser transformada">
<input type="submit" value="transformar">

</form>

<div>
<?php

if(isset($_POST['senha'])){
    $senha = $_POST['senha'];
    $crip = password_hash($senha, PASSWORD_DEFAULT);
    echo $crip;
}
?>
</div>

</body>
</html>