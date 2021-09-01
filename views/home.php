<h1 style="text-align:center">Bem-vindo ao Sistema fictício para vendas on-line</h1>
<br>
<br>
<br>

	<div class="col-lg-12 text-center">
					<h2>Àrea Restrita</h2> 					                    
	</div>	
	<form method="post" action="login.php">			
	<label class="badge badge-secondary">Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control" required>
	<br>
	<label class="badge badge-secondary">Senha:</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control" required>

	<br>

	<input type="submit" value="Entrar" class="btn btn-success">

</form>
<br>
<?php if(isset($_GET['erro'])){ ?>

	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos.
	</div>

<?php } ?>
</section>	

