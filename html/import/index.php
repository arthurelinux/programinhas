<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Restaurador de DB!</title>
  </head>
  <body>
  <div class="container">
  <h1> Restaurar Base de Dados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<div class="row">
			<div class="col-md-4">
			<div class="form-group">
				<form method="POST" action="processa.php" enctype="multipart/form-data">
				<label>Servidor: </label>
				<input type="text" class="form-control" name="servidor" placeholder="Nome do servidor">
			
			</div>
			<div class="form-group">
				<label>Usuário: </label>
				<input type="text" class="form-control" name="usuario" placeholder="Usuário da base de dados">
				
			</div>
			<div class="form-group">
				<label>Senha: </label>
				<input type="password" class="form-control" name="senha" placeholder="Senha da base de dados">
			
			</div>
			<div class="form-group">
				
				<label>Base de Dados: </label>
				<input type="text" class="form-control" name="dbname" placeholder="Nome da base de dados">
				
			</div>
			<div class="form-group">
					
				<label>Backup: </label>
				<input type="file" class="form-control" name="arquivo">
			
			</div>
			<div class="form-group">
			<input type="submit" class="btn btn-primary form-control" value="Importar">
			
			</form>
			</div>
			
			</div>
		
		</div>
	
		
			
	
  </div>
		
	</body>
</html>