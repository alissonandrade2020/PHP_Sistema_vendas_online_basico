<a class="btn btn-success" href="?pagina=inserir_compra">Inserir nova compra</a>
<br>
<br>
<table class="table table-hover table-striped" id="compras">
	<thead>
		<tr>
			<th>Nome do Cliente</th>
			<th>Nome do Produto</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			while($linha = mysqli_fetch_array($consulta_compras)){
				echo '<tr><td >'.$linha['nome_cliente'].'</td>';
				echo '<td>'.$linha['descricao'].'</td>';
		?>
			<td>
				<a href="deleta_compra.php?id_cliente_produto=<?php echo $linha['id_cliente_produto']; ?>">
					<span style="color: Tomato;">
						<i class="fas fa-trash-alt"></i>
					</span>
				</a>
			</td></tr>
		<?php		
			}

		?>
	</tbody>
</table>