<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Editar Reserva</h1>
<?php
	$sql_1 = "SELECT * FROM reserva WHERE id_reserva=".$_REQUEST["id_reserva"];

	$res_1 = $conn->query($sql_1) or die($conn->error);
	
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_reserva" value="<?php print $row_1->id_reserva; ?>">
	<div class="mb-3">
        <label>Aluno</label>
        <select name="aluno_id_aluno" class="form-control" required="required">
            <option>-= Selecione um Aluno =-</option>
      		<?php
         		$sql = "SELECT * FROM aluno";
           		$res = $conn->query($sql) or die($conn->error);
            	if($res->num_rows > 0){
            		while ($row = $res->fetch_object()){
            			if($row->id_aluno == $row_1->aluno_id_aluno){
            				print "<option value='".$row->id_aluno."' selected>";
            				print $row->nome_aluno."</option>";
            			}else{
            				print "<option value='".$row->id_aluno."'>";
							print $row->nome_aluno."</option>";
						}
					}
				}else{
					print "<option>Não há alunos cadastrados</option>";
				}
			?>
		</select>
		<div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control" required="required">
            <option>-= Selecione um Livro =-</option>
      		<?php
         		$sql = "SELECT * FROM livro";
           		$res = $conn->query($sql) or die($conn->error);
            	if($res->num_rows > 0){
            		while ($row = $res->fetch_object()){
            			if($row->id_livro == $row_1->livro_id_livro){
            				print "<option value='".$row->id_livro."' selected>";
            				print $row->titulo_livro."</option>";
            			}else{
            				print "<option value='".$row->id_livro."'>";
							print $row->titulo_livro."</option>";
						}
					}
				}else{
					print "<option>Não há livros cadastrados</option>";
				}
			?>
		</select>
		</div>
		<div class="mb-3">

        <label>Atendente</label>
        <select name="atendente_id_atendente" class="form-control" required="required">
            <option>-= Selecione um Atendente =-</option>
      		<?php
         		$sql = "SELECT * FROM atendente";
           		$res = $conn->query($sql) or die($conn->error);
            	if($res->num_rows > 0){
            		while ($row = $res->fetch_object()){
            			if($row->id_atendente == $row_1->atendente_id_atendente){
            				print "<option value='".$row->id_atendente."' selected>";
            				print $row->nome_atendente."</option>";
            			}else{
            				print "<option value='".$row->id_atendente."'>";
							print $row->nome_atendente."</option>";
						}
					}
				}else{
					print "<option>Não há atendentes cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data de Reserva</label>
		<input type="date" name="data_reserva" value="<?php print $row_1->data_reserva; ?>" class="form-control">
	</div>
<div class="mb-3">
		<label>Data de Entrega</label>
		<input type="date" name="data_entrega" value="<?php print $row_1->data_entrega; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Enviar</button>
	</div>
</form>
</div>
