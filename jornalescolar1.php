
<?php include ("header.php") ?>

<section>

<div class="row">
  <div class="col-sm-5">
       <div class="well well-sm success">Est&aacute; na p&aacute;gina <a href="#">Jornal Escolar</a></div>
     </div>
  
   <div class="col-sm-2"> </div>
  
<div class="col-sm-5">
<!--<form class="form-inline" role="form" method="post" action="#">
		<div class="form-group form-procurar">
		<input type="text" placeholder="o que procura?" name="procurar" class="form-control"/> 
		<input type="submit" class="btn btn-default" name="botao" value="procurar" />
		</div> 
</form>-->
</div><!--Fim-->
  
 </div> 

  <br />

 <br />
    <?php
    $id_jornal = $_GET['id_jornal'];
    $sql = "SELECT * from jr_noticias where id='$id_jornal'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()) {

    ?>

    <div class="row">

        <div class="col-sm-1"> </div>

        <div class="col-sm-7  noticia">

            <h1 class="titulo_noticia"> <?php echo $row["titulo"];?></h1>

            <center> <img src="demo/imagem1.png" width="100%" heigth="40%" class="imagem_noticia"> </center>


            <div class="noticia"><?php echo $row["texto"];?> </div>





        <?php
        }

        } else {
            echo "0 resultados";
        }
        $conn->close();
        ?>

    </div>






    <div class="col-sm-1"></div>

    <aside class="col-sm-3 thumbnail informacao">

        <div style="background-color: #333; text-align: center; width: 100%; color: #fff ; padding: 0.01%;  height: 240px;">
            <span class="pub"> #Inscri&ccedil;&otilde;es abertas 2018</span>
            <img src="img/politecnica.jpg" name="univerdidade politecnica de Gaza" width="100%" height="230px;">
        </div>



        <br/><br/>
        <div style="background-color: #333; text-align: center; width: 100%; color: #fff ; /*padding: 0.01%; */ height: 240px;">
            <span class="pub">#Bolsa de estudos </span>
            <img src="img/uem.jpg" name="univerdidade politecnica de Gaza" width="100%" height="230px;">
        </div>



        <br/><br/>
        <div style="background-color: #333; text-align: center; width: 100%; color: #fff ; /*padding: 0.01%; */height: 265px;">
            <span class="pub"> #Edital 2018</span>
            <img src="img/ustm.jpg" name="univerdidade politecnica de Gaza" width="100%" height="230px;">
        </div>



    </div>








</section>
   
   
   
  <!-- =============================-->
  
   <!-- ====================================================-->

<?php
include ("footer.php");
?>