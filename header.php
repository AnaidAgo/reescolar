<?php include "conexao.php" ?>
<?php include "bd_jornalescolar.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="dcterms.created" content="Thu, 02 Jun 2016 12:05:34 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title> SIO-Estudante </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jc.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

  <header class="container-default pagina">


  <div class="row logobg container-default">
      <div class="col-sm-12">

          <div class="">
              <span class="logonome">ESCOLARGAZA</span>
          </div>

      </div>
  </div>

      <!--=========================================================================================-->
      <!--=========================================================================================-->
      <!--=========================================================================================-->
      <!--=========================================================================================-->
      <!--=========================================================================================-->


<!--#############################TOPO DA PAGINA //  BACKGROUND-IMAGE, SLOGAN DO SITE ###################################-->

      <div class="row topo">
  	    <div class="col-sm-12">

			 <div class="circle">
			 <center><img src="img/jc.jpg" class="logo img-circle" /></center>
			 </div>

 	     	 <h1 class="sioinfo">
                 <center><strong>Sistema de Informa&ccedil;&atilde;o Online <br/>ESCOLARGAZA</strong></center></h1>
  		</div> 
</div>


    <!-- ============= FIM ================-->



      <!--############################ MENU PRINCIPAL DO SITE ####################################-->
	
  <div class="row"> 
<nav class="navbar navbar-default"><!--inicio-->

   <div class="col-sm-12"><!--inicio-->
   
  	     <div class="container-fluid">
<div class="row">

    <div class="col-sm-9">

    			   			      <ul class="nav menu navbar-nav text-center">
                                    <li><a href="index.php">In&iacute;cio</a></li>
                                    <li><a href="jornalescolar.php">Jornal Escolar</a></li>
                                    <li><a href="#">Vitrine Escolar</a></li>
      	  					    <!--<li><a href="#">&Aacute;rea do Professor</a></li>
      		 			        <li class=""><a href="area-do-aluno.php">&Aacute;rea do Aluno</a></li>-->
                                      <!-- <li><a href="forum-discussao.php">F&oacute;rum de discuss&atilde;o</a></li>-->
								  <!--<li><a href="biblioteca.php">Biblioteca Online</a></li>-->
                                  <li><a href="jogosescolares.php">Jogos Escolares</a></li>
                                    <li><a href="sobre.php">Sobre Escolar</a></li>
                                    <li><a href="#">Contacto-nos</a></li>
      						    </ul>
    </div>

<!--====================== FIM ==================================-->



<!--   =========================== CAMPO DE BUSCA DO SITE =========================== -->

    <div class="col-sm-3">

        <form class="form-inline" role="form" method="get" action="#">
            <div class="form-group form-procurar">
               <input type="text" placeholder="o que procura?" name="procurar" class="form-control"/>
              <input type="submit" class="btn btnform btn-default" name="resultado" value="Ir" />
         </div>
      </form>
    </div>


</div>
 		 </div>
 		   
   </div> <!--Fim-->

</nav> <!--Fim-->
   </div>
  </header>