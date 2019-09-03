<fieldset>
	<legend>Novo Cadastro</legend>
		<input type="text" name="cpf" 
			placeholder="Cpf..." />
			
		<label>Tipo de Conta</label>
		<select	name="conta" onchange="liberar_limite(this.value)">
			<option value="" >Selecione</option>
			<option value="conta_corrente" >Conta Corrente</option>
			<option value="conta_especial" >Conta Especial</option>
		</select><br/>
		<div id="limite" style="display:none">
			<input type="number" name="limite" placeholder="Digite o limite especial..." />
		</div>
		
		<br/><br/>
		
		<input type="text" name="nome" 
			placeholder="Nome..." /><br/><br/>
			
		<input type="email" name="email" 
			placeholder="Email..." /><br/><br/>
		
		<input type="number" name="nroConta" 
			placeholder="Numero da Conta..." /><br/><br/>
			
		<input type="submit" value="Cadastrar" /> <br/>
</fieldset>