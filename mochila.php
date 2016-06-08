<?php 
?>
<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Formulário Programação Dinâmica</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  
  <body>
  	<script>
  	var nInput = 2;
  	function addItemInput() { 
		$("#placeInputHere").append('<label> Item '+nInput+' _____ Peso: </label><input type="number" required name="peso'+nInput+'" size="10" maxlength="10"/><label> Valor :</label><input type="number" required name="valor'+nInput+'" size="10" maxlength="10"/><br/>');
		nInput++;
	} 
  	</script>
    <form name="Mochila" method="POST" action="mochilaSubmit.php">
	  <label>----------------- Algoritmo Programação Dinâmica(Problema da Mochila) -----------------</label><br/>
	  <br/>
	  <label> Digite a capacidade:</label>
	  <input type="number" required name="cap" size="10" maxlength="10"/><br/>
	  
	  <br/>
	  <label> Item 1 _____ Peso:</label>
	  <input type="number" required name="peso1" size="10" maxlength="10"/>
	  <label> Valor:</label>
	  <input type="number" required name="valor1" size="10" maxlength="10"/><br/>

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
