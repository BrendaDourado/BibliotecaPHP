<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Listar alunos</h1>
<?php
	$sql="SELECT * FROM aluno";
	$res = $conn->query($sql)or die ($conn -> error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
		print"<table class='table table-light table-striped table-bordered table-hover'>";
		print "<tr>";
		print"<th>#</th>";
		print "<th>Nome do Aluno</th>";
		print "<th>Endereço</th>";
		print "<th>Email</th>";
       	print "<th>Telefone</th>";
       	print "<th>Data de Nascimento</th>";
       	print "<th>Genero</th>";
       	print "<th>Ações</th>";
       	print"</tr>";
       	While ($row = $res-> fetch_object())
       	{
       	print "<tr>";
       	print "<td>".$row -> id_aluno."</td>";
       	print "<td>".$row -> nome_aluno."</td>";
		print "<td>".$row-> end_aluno."</td>";
		print "<td>".$row-> email_aluno."</td>";
       	print "<td>".$row-> fone_aluno."</td>";
       	print "<td>".ExibeData($row-> dt_nasc_aluno)."</td>";
       	print "<td>".$row-> genero_aluno."</td>";
       	print "<td>

					<button class='btn btn-dark' onclick=\"if(confirm('Tem certeza que deseja editar?')){location.href='?page=aluno-editar&acao=editar&id_aluno=".$row->id_aluno."';}else{false;}\">
					<i class=\"fas fa-pen\"></i>
					</button>

                   <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=aluno-salvar&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\">
                   <i class=\"far fa-trash-alt\"></i>
                   </button>
                  </td>";
			print "</tr>";
       	}
       	print"</table>";

    }else{
       	print "<div class = 'alert alert-danger'> Não encontrou resultados</div>";
       }
?>
</div>