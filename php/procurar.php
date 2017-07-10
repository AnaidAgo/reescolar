<?
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$db = @mysql_connect("localhost","root","") or die("Ocorreu o seguinte erro na conexão: ".mysql_error());
@mysql_select_db("alunosbd",$db) or die("ocorreu o seguinte erro na selecao do db: ".mysql_error());
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
    if(isset($_POST['botao'])) {
	  $busca = $_POST['busca'];
	  
	   $busca_divida = explode(' ',$busca);
	    $quant = count($busca_divida);
		
		 for($i=0;$i<$quant;$i++) {
		    $pesquisa = $busca_divida[$i];
			
			$sql mysql_query("SELECT * FROM alunostb WHERE titulo LIKE '%$pesquisa%' ");
			while($linha = mysql_fetch_array($sql)) {
			     $titulo = $linha['titulo'];
				 $conteudo = $linha['conteudo'];
				 
				 echo "
				 <div class='resultado'>
				 <h2>".$titulo."</h2>
				 <p>".$conteudo."</p>
				</div>
				 ";
			}
		 }
	}
  ?>
   	   <form name="searchform" method="post" action="">
   		 <div class="form-group campoprocurar">
   		  
		  <input type="text" placeholder="Escreva aqui o que procura" style="float: left;" name="busca" class="form-control"  id="procurador">
		  <input style="float: right;" type="submit" class="btn btn-danger" name="botao" value="pesquisar" />
		 
		 </div> <!--Fim-->
	   </form>
	   
	   
	   
	   </body>
	   
	   </html>