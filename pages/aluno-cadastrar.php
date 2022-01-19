<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Cadastrar aluno</h1>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class=mb-3>
	<label>Nome da Aluno</label> <input type="text" name="nome_aluno" class="form-control">
	</div>
	<div class=mb-3>
	<label>Endereço</label> <input type="text" required="required" name="end_aluno" class="form-control">	
	</div>
	<div class=mb-3>
	<label>Email</label> <input type="text" required="required" name="email_aluno" class="form-control">	
	</div>
	<div class=mb-3>
	<label>Telefone</label> <input type="text" required="required" name="fone_aluno" class="form-control">	
	</div>
	<div class=mb-3>
	<label>Data de Nascimento</label> <input type="date" required="required"  name="dt_nasc_aluno" class="form-control">	
	</div>
	<div>
        <label>Genero</label>
    	<br>
         <label>
           <input type="radio" name="genero_aluno" value="Masculino"  required="required">Masculino
         </label>
         <label>
           <input type="radio" name="genero_aluno" value="Feminino"  required="required">Feminino
         </label>
         <label>
           <input type="radio" name="genero_aluno" value="Outros"  required="required">
           Outros
         </label>
        
    	
    </div>
	<div class=mb-3>
		<button type="submit" class="btn btn-dark">Enviar</button>
	</div>
</div>
</form>