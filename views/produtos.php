<meta charset="UTF-8" />
<a class="btn btn-success" href="?pagina=inserir_produto">Inserir novo produto</a>
<br>
<br>
<table class="table table-hover table-striped" id="produtos">
	<thead>
		<tr>
			<th>Descrição do Produto</th>
			<th>Quantidade</th>
			<th>Preço</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_produtos)){
				echo '<tr><td >'.$linha['descricao'].'</td>';
				echo '<td>'.$linha['quantidade'].'</td>';
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

	<tr>
			<th>Total :</th>	
			<th>
				<?php
			
				$conn = mysqli_connect('localhost','root','','indra');	
			
				$resultado = mysqli_query($conn, "SELECT sum(quantidade) FROM produtos");
				$linhas = mysqli_num_rows($resultado);
			
				while($linha = mysqli_fetch_array($resultado)){
					echo $linha['sum(quantidade)'].'<br/><br/>';
						
						?>
			
				<?php
					}
				?>
			</th>
			<th>
				<?php
			
				$conn = mysqli_connect('localhost','root','','indra');	
			
				$resultado = mysqli_query($conn, "SELECT sum(preco) FROM produtos");
				$linhas = mysqli_num_rows($resultado);
			
				while($linha = mysqli_fetch_array($resultado)){
					echo $linha['sum(preco)'].'<br/><br/>';
						
						?>
			
				<?php
					}
				?>
			</th>	
			<th></th>		
			<th></th>		
		</tr>
	
	</thead>

</table>