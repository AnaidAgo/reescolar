<?php include "conexao.php"; ?>
<?php include ("header.php") ?>

  
  
    <!-- =============================-->




<section>

  <div class="row">
	<div class="col-sm-5">
       <div class="well well-sm success">Est&aacute; na p&aacute;gina   <a href="jogosescolares.php">Jogos Escolares</a>/futebol/ao vivo</div>
     </div>
	
	 <div class="col-sm-7"> </div>
	
 
  </div>


    <br />


    <div class="row">
        <div class="col-sm-2"> </div>
        <!--===============MENU DE JOGOS ESCOLARES==========================-->
        <!--===============MENU DE JOGOS ESCOLARES==========================-->
        <!--===============MENU DE JOGOS ESCOLARES==========================-->
        <!--===============MENU DE JOGOS ESCOLARES==========================-->
        <!--===============MENU DE JOGOS ESCOLARES==========================-->

        <div class="col-sm-8">
            <nav class="container-fluid">
                <ul class="nav nav-pills menujogos">
                    <li><a href="#"></a></li>
                    <li><a href="jogosescolares.php">&nbsp;&nbsp;&nbsp; &nbsp;In&iacute;cio</a> </li>
                    <li class="active"> <a href="futebol.php">Futebol</a> </li>
                    <li> <a href="basquetebol.php">Basquetebol</a></li>
                    <li> <a href="voleibol.php">Voleibol</a> </li>
                    <li> <a href="andebol.php">Andebol</a> </li>
                    <li> <a href="xadrez.php">Xadrez</a> </li>
                    <li> <a href="tradiconais.php"> Tradiconais</a> </li>
                </ul>

            </nav>
        </div>

        <div class="col-sm-2"> </div>

    </div>


    <!--===============MENU DE JOGOS ESCOLARES==========================-->
    <!--===============MENU DE JOGOS ESCOLARES==========================-->

    <br />    <br />
    <div class="row">
        <div class="col-sm-4"> </div>

        <div class="col-sm-6">



            <!--===============MENU DE  RESULTADOS==========================-->



            <nav class="navegacaoresultados">
                    <ul class="menuresultado-jogos nav-pills nav">
                        <li class="active"><a href="#">Ao vivo</a></li>
                        <li class=""><a href="#">Encerados</a></li>
                        <li  class=""><a href="#">Pr&oacute;ximos</a></li>
                        <li class=""><a href="#">Classifica&ccedil&atilde;o</a></li>
                    </ul>
            </nav>

            <!--===============MENU DE  RESULTADOS==========================-->
            <!--===============MENU DE  RESULTADOS==========================-->
            <!--===============MENU DE  RESULTADOS==========================-->
            <!--===============MENU DE  RESULTADOS==========================-->
            <!--===============MENU DE  RESULTADOS==========================-->



        </div>

        <div class="col-sm-2"> </div>
    </div>


    <br />





<div class="row">
    <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="page-header"><h3>FUTEBOL FEMININO - S&Eacute;RIA <strong>B</strong></h3></div>
            <div class="panel-body">
                <table class="table-bordered table">

                    <thead class="text-uppercase text-primary text-center">
                    <tr>
                    <?php

                    $sql = mysqli_query($conn,"select * from resultados_aovivo where id=4") or die("Erro" . $conn->error);
                    while($dados=mysqli_fetch_assoc($sql))
                    {
                        echo " <td> " . $dados['provincia_a'] . "</td> <td>" .$dados['classificacao_a']. " - " .$dados['classificacao_b'] . "</td> <td> " . $dados['provincia_b'] . "</td>";
                    }

                    $conn->close();

                    ?>







                    </tr>
                    <!--=================================Outras esquipas======================================-->
                    </thead>

                </table>
            </div>
        </div>

        <div class="col-sm-4"></div>
    </div>
    <!--=========================FIM DE TABELA DE PROVINCIAS=====================-->
    <!--=========================FIM DE TABELA DE PROVINCIAS=====================-->
    <!--=========================FIM DE TABELA DE PROVINCIAS=====================-->
    <!--=========================FIM DE TABELA DE PROVINCIAS=====================-->






</section>



  <br/>
  <!-- =============================-->
  
   <!-- ====================================================-->
<?php
include ("footer.php");
?>