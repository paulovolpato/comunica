<?php
	include("seguranca.php"); /** Inclui o arquivo com o sistema de segurança */
	protegePagina(); /** Chama a função que protege a página */
	
	echo "Seja bem vindo: " . $_SESSION['usuarioNome']; /** Mostra mensagem com nome do Usuário */
?>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
	<form action="sair.php">

		<input type="submit" value="Sair" />
	</form>
</body>
</html>