<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Listar Reservas </h1>
<?php
    $sql = "SELECT * FROM reserva AS a INNER JOIN aluno AS b ON b.id_aluno = a.aluno_id_aluno INNER JOIN livro AS d ON d.id_livro = a.livro_id_livro  INNER JOIN atendente AS e ON e.id_atendente = a.atendente_id_atendente";

    $res = $conn->query($sql) or die($conn->error);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
    	print "<p> Encontrei <b>$qtd</b> resultados</p>";
    	print "<table class='table table-light table-bordered table-striped table-hover'>";
    	print "<tr>";
      print "<th>#</th>";
    	print "<th>Nome do Aluno</th>";
    	print "<th>Titulo do Livro</th>";
        print "<th>Nome do Atendente</th>";
        print "<th>Data da Reserva</th>";
        print "<th>Data da Entrega</th>";
        print "<th>Ações</th>";
        print "</tr>";
    	while ($row = $res->fetch_object()) {
    		  print "<tr>";
          print "<td>".$row->id_reserva."</td>";
    		  print "<td>".$row->nome_aluno."</td>";
    		  print "<td>".$row->titulo_livro."</td>";
    		  print "<td>".$row->nome_atendente."</td>";
    		  print "<td>".ExibeData($row->data_reserva)."</td>";
    		  print "<td>".ExibeData($row->data_entrega)."</td>";
              print "<td>
                     <button class='btn btn-dark' onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."';\">
                      <i class=\"fas fa-pen\"></i>
                      </button>

                  <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."';}else{false;}\">
                  <i class=\"far fa-trash-alt\"></i>
                   </button>

                     </td>";
    		  print "</tr>";
    	}
    	print "</table>";
    }else{
    	print "<div class='alert alert-danger'>Não tem resultados</div>";
    }
?>
</div>
