<?php
ini_set('display_errors',E_ALL);
error_reporting(0); // Suprime as mensagens de erro do servidor.
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
	</head>
	<body>
<?php
  $capacidade = $_POST["cap"];

  for($i=0; $i<(sizeof($_POST)-1)/2; $i++){
    $itens[$i][0] = $_POST["peso".($i+1)];
    $itens[$i][1] = $_POST["valor".($i+1)];
  }

?>
<h3>Programação Dinâmica(Problema da Mochila)</h3>
<hr>
<br />
<?php
  $ss=0;
  $trocou = 1;//Ordenar itens pelo peso.
  while($trocou==1)
  {
    $trocou = 0;
    for($i=0;$i<sizeof($itens)-1;$i++)
       if($itens[$i][0]>$itens[$i+1][0])
	   {
	    $aux = $itens[$i+1][0];
		  $aux2 = $itens[$i+1][1];
		  $itens[$i+1][0] = $itens[$i][0];
		  $itens[$i+1][1] = $itens[$i][1];
		  $itens[$i][0] = $aux;
		  $itens[$i][1] = $aux2;
		  $trocou = 1;
	   }
  }
?>  
<br/><br/>Capacidade = <?php echo $capacidade;?><br/><br/>
<table border='1'>
    <thead><!-- abre cabeçalho -->
        <tr><!-- abre uma linha -->
            <th>Item</th><!-- colunas do cabeçalho -->
            <th>Peso</th><!-- colunas do cabeçalho -->
            <th>Valor</th><!-- colunas do cabeçalho -->
        </tr><!-- fecha linha -->
    </thead>
    <tbody>
<?php for($i=0;$i<sizeof($itens);$i++):
	$peso = $itens[$i][0];
	$valor = $itens[$i][1];
?>
        <tr>
            <td width='45' align='center'><?php echo $i;?></td>
            <td width='45' align='center'><?php echo $peso;?></td>
	    <td width='45' align='center'><?php echo $valor;?></td>
        </tr>
<?php endfor; ?>
    </tbody>
</table>
<?php  
  for($i=0;$i<=sizeof($itens);$i++)
  {
     for($j=0;$j<=$capacidade;$j++)
	 {
	   if($i==0)
	       $table[$i][$j] = 0;
	   else
	   {
	     if($itens[$i-1][0]>$j)//Quando não caber o de cima prevalece.
		    $table[$i][$j] = $table[$i-1][$j];
		 else
		    $table[$i][$j] = $table[$i-1][$j-$itens[$i-1][0]] + $itens[$i-1][1];
	   }
	   
	 }
  }
?>
<br/><br/>
Tabela Final Computada!<br/><br/>
<table border='1'>
    <!-- abre cabeçalho -->
    <thead>
    	<!-- abre uma linha -->
        <tr>
            <?php for($k=-1;$k<=$capacidade;$k++): if($k>=0): ?>
            <!-- colunas do cabeçalho -->
            <th><?php echo $k;?></th>
	    <?php else: ?>
	    <th></th>
	    <?php endif; endfor;?>
        </tr>
        <!-- fecha linha -->
    </thead> 
<?php for($i=0;$i<=sizeof($itens);$i++)
      {
        echo"<tr>";
        for($p=-1;$p<=$capacidade;$p++)
        {
		  if($p>=0)
		  {
           if(is_float($table[$i][$p])==true)
             $print = number_format($tableau[$i][$p],1,',','.');
           else
             $print = $table[$i][$p];
	      }
		  else
		     if($i>0)$print = $itens[$i-1][0];
			 else $print = 0;
		 echo "<td width='45' align='center'>$print</td>";
        }
		echo "</tr>";
      }
  echo "</table>";
  
  $circ=0;
  for($t=0,$i=sizeof($itens),$j=$capacidade;$i>0;$i--)
  {
	   if($table[$i][$j]!=$table[$i-1][$j])
	   {
	     $mark[$t][0]=$i;
		 $mark[$t][1]=$j;
		 $circ++;
		 $t++;
		 $j = $j - $itens[$i-1][0];
	   }
  }
  ?>
<br/><p>
Análise da Tabela!</p>
<br/>Tabela analisada
<table border='1'>
    <thead><!-- abre cabeçalho -->
        <tr><!-- abre uma linha -->
  <?php
  for($k=-1;$k<=$capacidade;$k++)
  {
      if($k>=0)
        echo "<th>$k</th>"; // colunas do cabeçalho
	  else
	    echo "<th></th>";
  }
  echo "</tr>";//fecha linha
  echo "</thead>"; 
  for($i=0;$i<=sizeof($itens);$i++)
      {
        echo"<tr>";
        for($p=-1;$p<=$capacidade;$p++)
        {
		  if($p>=0)
		  {
		   for($m=0;$m<$circ;$m++)
			   if($mark[$m][0]==$i&&$mark[$m][1]==$p)
			     $fcirc=1;
           if(is_float($table[$i][$p])==true)
             $print = number_format($tableau[$i][$p],1,',','.');
           else
             $print = $table[$i][$p];
	      }
		  else
		  {
		     for($m=0;$m<$circ;$m++)
			   if($mark[$m][0]==$i)
			   {
			     $somar[$ss] = $i;
				 $ss++;
			     $found=1;
			   }
		     if($i>0)$print = $itens[$i-1][0];
			 else $print = 0;
		  }
		  
		 if($found==1)
		   echo "<td width='45' align='center'>*$print</td>";
		 else
		   if($fcirc==1)
		      echo "<td width='45' align='center'>($print)</td>";
		   else
		      echo "<td width='45' align='center'>$print</td>";
		 $found = 0;
		 $fcirc = 0;
        }
		echo "</tr>";
      }
  echo "</table>";
  echo "<br/><br/>Capacidade = ";
  for($m=0;$m<$ss-1;$m++)
    echo $itens[$somar[$m]-1][0]." + ";
  echo $itens[$somar[$m]-1][0]." = ".$capacidade;
?>
<br/>
<p>
    <a href="mochila.php">Clique aqui para calcular novamente.</a>
</p>
