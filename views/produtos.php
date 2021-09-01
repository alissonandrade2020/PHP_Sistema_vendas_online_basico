<meta charset="UTF-8" />
<a class="btn btn-success" href="?pagina=inserir_produto">Inserir novo produto</a>
<br>
<br>
<table class="table table-hover table-striped" id="produtos">
	<thead>
		<tr>
			<th>Descrição do Produto</th>
			<th>Preço</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_produtos)){
				echo '<tr><td >'.$linha['descricao'].'</td>';
				echo '<td>'.$linha['preco'].'</td>';
		?>
			<td><a href="?pagina=inserir_produto&editar=<?php echo $linha['id_produto']; ?>">
				
				<i class="fas fa-edit"></i>

			</a></td>
			<td><a href="deleta_produto.php?id_produto=<?php echo $linha['id_produto']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>