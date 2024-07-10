<main>
	<form action='conteudo.php' method='post'>
		
		<div class='formulario'>
			
			<fieldset>
				
				<div class='campo1'>
					<label for='nome' >Nome:</label>
					<input type= 'text' class='imput1' name ='nome' id='nome' maxlength='9'>
				</div>
				
				<div class='campo2'>
					<label for='email' >Email:</label>
					<input type= 'email' class='imput2' name='email' id='email'>
				</div>
				
				<div class='campo3'>
					<label for='senha' >senha:</label>
					<input type= 'password' class='imput3' name='senha' id='senha'>
				</div>

				<div class='button'>
					<input type='submit' class='botao' value='enviar' id='enviar'/>
				</div>
				
			</fieldset>
		</div>
	</form>
</main>
<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nome = htmlspecialchars($_POST['nome']);
		$email = htmlspecialchars($_POST['email']);
		$senha = htmlspecialchars($_POST['senha']);
		if (empty($nome) || empty($email) || empty($senha)){
			echo "<script> alert('todos os campos são obrigatorios')</script>";
		}else{
			echo "<p>strlen($nome)</p>";
			echo "<p> o nome é $nome </p>";
			echo "<p> o email é $email <p>";
			print "<p> a senha é $senha <p>";
		}
	}
	

?>

