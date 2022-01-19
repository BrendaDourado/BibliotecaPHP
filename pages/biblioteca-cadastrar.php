<div style="text-align:center;background-color:#000000;padding:3px;border-radius:15px;">
<h1>Cadastrar biblioteca</h1>
<form action="?page=biblioteca-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class=mb-3>
	<label>Nome da Biblioteca</label> <input type="text" name="nome_biblioteca" class="form-control">
	</div>
	<div class=mb-3>
	<label>Endereço</label> <input type="text" name="end_biblioteca" class="form-control">	
	</div>
	<div class=mb-3>
		<button type="submit" class="btn btn-dark">Enviar</button>
	</div>
</form>
</div>
