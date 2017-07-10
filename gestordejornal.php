<?php include "header.php" ?>
	
	
<section>
	
<div class="row">
	<div class="col-sm-7">
       <div class="well well-sm success">Olá gestor! Seja bem Vindo a área de <a href="#">gest&atilde;o de jornal escolar</a>.
           Para visitar página inicial clique <a href="#">aqui</a> </div>
  </div>


<div class="col-sm-5">

</div>
</div><!--Fim-->

    <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form class="form-group" method="get" action="adiciona-informacao.php">

               <input type="text" class="form-control" name="titulo" placeholder="Titulo" required/> <br/><br/>

                   <textarea class="form-control" rows="5" placeholder="Conteudo" required name="conteudo"></textarea>
                <br/> <br/>
                <input type="submit" class="btn btn-primary" value="Enviar">

            </form>


        </div>
        <div class="col-sm-2"></div>
    </div>
  <br />



<?php
include ("footer.php");
?>