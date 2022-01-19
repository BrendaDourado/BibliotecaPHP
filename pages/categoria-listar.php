<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Listar categorias</h1>

<?php
	$sql = "SELECT * FROM categoria";
	$res = $conn->query($sql) or die ($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado<s></p>";
		print"<table class='table table-light table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print"<th>Nome da Categoria</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res-> fetch_object()){
			print "<tr>";
			print "<td>".$row ->id_categoria."</td>";
			print"<td>".$row ->nome_categoria."</td>";
			print "<td>

					<button class='btn btn-dark' onclick=\"location.href='?page=categoria-editar&id_categoria=".$row->id_categoria."';\">
					<i class=\"fas fa-pen\"></i>
					</button>
					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$row->id_categoria."';}else{false;}\">
					<i class=\"far fa-trash-alt\"></i>
                   </button>
			</td>";
			print "</tr>";
		}
		print"</table>";
	}else{
		print "<div class = 'alert alert-danger'>Não encontrou resultados</div>";
	}

?>
</div>