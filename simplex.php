<?php 
?>
<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Formulário Simplex</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  
  <body>
  	<script>
  	var nInput = 2;
  	function addItemInput() { 
  		if (nInput < 11){
			$("#placeInputHere").append('<label>Restrição '+nInput+':</label><input type="text" required name="restricao'+nInput+'" size="62" maxlength="62"/><br/>');
			nInput++;
		}
	} 
  	</script>
    <form name="Simplex" method="POST" action="simplexSubmit.php">
	  <label>--------------------------------- Algoritmo Simplex ---------------------------------</label><br/><br/><br/>
	  
	  <label> --------------------------------- Digite a sua opção: ---------------------------------<br/>
	          Resultado final: 1 __________ Iterações: 2 __________ Passo a passo: 3
	  </label><br/>
	  <input type="number" required name="op" size="1" maxlength="1"/><br/>
	  
	  <br/>
	  <label> Digite 0 para Maximizar ou 1 para Minimizar:</label><br/>
	  <input type="number" required name="opmx" size="1" maxlength="1"/><br/>
	  
	  <br/>
	  <label> Função Objetivo:</label><br/>
	  <input type="text" required name="expression" size="77" maxlength="77"/><br/>
	  
	  <br/>
	  <label> Restrição 1:</label>
	  <input type="text" required name="restricao1" size="62" maxlength="62"/><br/>

	  <div style="width: 45%">
	  <div id="placeInputHere"></div>
	  <div style="float: right"><input type="button" value="Adicionar item" onClick="addItemInput()"> 
	  </div>
	  </div>
	  
	  <br/>
	  <input type="submit" value="Calcular"/>
	 
	</form>
  </body>
  
</html>