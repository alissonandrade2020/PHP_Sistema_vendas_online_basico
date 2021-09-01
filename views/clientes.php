<a class="btn btn-success" href="?pagina=inserir_cliente">Inserir novo Cliente</a>
<br>
<br>
<table class="table table-hover table-striped" id="clientes">
	<thead>
		<tr>
			<th>Nome do Cliente</th>
			<th>CPF/CNPJ</th>			
			<th>Editar</th>
			<th>Deletar</th>			
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_clientes)){
				echo '<tr><td >'.$linha['nome_cliente'].'</td>';
				echo '<td>'.$linha['cpf_cnpj'].'</td>';								
			?>
			
			<td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['id_cliente']; ?>">
				<i class="fas fa-user-edit"></i>
			</a></td>			
			<td><a href="deleta_cliente.php?id_cliente=<?php echo $linha['id_cliente']; ?>"><i class="fas fa-user-times"></i></a></td></tr>	
		<?php
			}
		?>
	</tbody>

</table>