<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Cadastrar reserva</h1>
<form action="?page=reserva-salvar" method="POST"> 
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Aluno</label>
		<select name="aluno_id_aluno" class="form-control">
			<option>-= Selecione um Aluno=-</option>
			<?php
				$sql = "SELECT * FROM aluno";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_aluno."'>";
						print $row->nome_aluno."</option>"; 
					}
				}else{
					print "<option>Não há alunos cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>-= Selecione um livro =-</option>
			<?php
				$sql = "SELECT * FROM livro";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_livro."'>";
						print $row->titulo_livro."</option>"; 
					}
				}else{
					print "<option>Não há livros cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Atendente</label>
		<select name="atendente_id_atendente" class="form-control">
			<option>-= Selecione uma Atendente =-</option>
			<?php
				$sql = "SELECT * FROM atendente";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_atendente."'>";
						print $row->nome_atendente."</option>"; 
					}
				}else{
					print "<option>Não há atendentes cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data de reserva</label>
		<input type="date" name="data_reserva" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data entrega </label>
		<input type="date" name="data_entrega" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Enviar</button>
	</div>
</form>
</div>