<h1>Inserir novo produto</h1>

<form method="post" action="processa_compra.php">
	<br>
	<p class="badge badge-secondary">Selecione o cliente</p>
	<select class="form-control" name="escolha_cliente">
		<option>Selecione um cliente</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_clientes)){
			echo '<option value="'.$linha['id_cliente'].'">'.$linha['nome_cliente'].'</option>';
		}
		?>
	</select>

	<br><br>

	<p class="badge badge-secondary">Selecione o produto</p>
	<select class="form-control" name="escolha_produto">
		<option>Selecione um produto</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_produtos)){
			echo '<option value="'.$linha['id_produto'].'">'.$linha['descricao'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Cliente comprar">
</form>