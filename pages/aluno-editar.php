<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Editar aluno</h1>
<?php
	$sql = "SELECT * FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];
	
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
	<div class="mb-3">
		<label>Nome do Aluno</label> 
		<input type="text" name="nome_aluno" required="required"  class="form-control" value="<?php print $row->nome_aluno; ?>">
	</div>
	<div class=mb-3>
	<label>Endereço</label> 
	<input type="text" name="end_aluno" required="required"  class="form-control" value="<?php print $row->end_aluno; ?>">
	</div>
	<div class=mb-3>
	<label>Email</label> 
	<input type="text" name="email_aluno" required="required"  class="form-control" value="<?php print $row->email_aluno; ?>">	
	</div>
	<div class=mb-3>
	<label>Telefone</label> 
	<input type="text" name="fone_aluno" required="required" class="form-control" value="<?php print $row->fone_aluno; ?>">	
	</div>
	<div class=mb-3>
	<label>Data de Nascimento</label> 
	<input type="text" name="fone_aluno" required="required"  class="form-control" value="<?php print $row->dt_nasc_aluno; ?>">	
	</div>
	<div>
        <label>Genero</label>
        <br>
         <label>
           <input type="radio" name="genero_aluno" value="Masculino"  required="required" <?php print($row->genero_aluno=="Masculino"?"checked":""); ?> >Masculino
         </label>
         <label>
           <input type="radio" name="genero_aluno" value="Feminino"  required="required"  <?php print($row->genero_aluno=="Masculino"?"checked":""); ?> >Feminino
         </label>
         <label>
           <input type="radio" name="genero_aluno" value="Outros"  required="required"  <?php print($row->genero_aluno=="Masculino"?"checked":""); ?> >Outros
         </label>
    	
    </div>
	<div class="mb-3">
		<button type="submit" class="btn btn-dark">Enviar</button>
	</div>
</div>
</form>