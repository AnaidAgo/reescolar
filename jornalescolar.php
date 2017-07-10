
<?php include ("header.php") ?>


  
    <!-- =============================-->

  
<section>

<div class="row">
  <div class="col-sm-5">
       <div class="well well-sm success">Est&aacute; na p&aacute;gina <a href="#">Jornal Escolar</a></div>
     </div>
   <div class="col-sm-2"> </div>
<div class="col-sm-5">
</div>
 </div> 

  <br /> <br />


    <div class="row">
        <div class="col-sm-12">

            <div class="filtro">
<div class="row">

    <div class="col-sm-2"></div>
    <div class="col-sm-2">
                <form method="post" action="#" class="form-group">
                    <span>Escola Secund&aacute;ria de Xai-Xai</span>
                <input type="radio" class="radio-inline" name="escola" value="Escola-secundaria-de-Xai-Xai"/>
    </div>


    <div class="col-sm-2">
                    <span>Escola Secund&aacute;ria Joaquim Chissano</span>
                <input type="radio" class="radio-inline" name="escola" value="Escola-secundaria-Joaquim-Chissano">
    </div>



        <div class="col-sm-2">
                    <span>Escola Secund&aacute;ria de Inhamissa</span>
                <input type="radio" class="radio-inline" name="escola" value="Escola-Secundaria-de-Inhamissa"/>
        </div>



                    <div class="col-sm-2">
                    <span>Escola Secund&aacute;ria de 2000</span>
                <input type="radio" class="radio-inline" name="escola" value="Escola Secundaria de 2000"/>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Filtrar">
</div>

                </form>
</div>
            </div>

        </div><!--Fim-->

    <br/>
  
<div class="row">

    <?php
    $sql = "SELECT * from jr_noticias";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0) {

        while($row = $resultado->fetch_assoc()) {


           // echo "id: " . $row["id"]. " - Name: " . $row["titulo"]. " " . $row["escola"]. "<br>";


    ?>


    <div class="col-sm-4">
       <div class="panel panel-default">
                   <div class="panel-heading">
                   <h4><?php echo $row["titulo"]?></h4>
                   </div>
        
               <div class="panel-body">
                <p>Os alunos sao o convocados a participar
             em um debate que envolve os os estudantes, com o
              objective de resolver questões de desenvolvimento, criação de serviços
              que melhoram o desempenho da comunidade.no emprego, no envolvimento e na participação activa...</p>

                   <h6> <span><strong> Publicado em: </strong><?php echo $row["data_publicacao"] ?>
                       </span> <span><strong>Fonte:</strong><?php echo $row["escola"]  ?> </span></h6>

               </div>
                 
             <div class="panel-footer">

                 <a href="jornalescolar1.php?id_jornal=<?php echo $row['id'];?>"> <button class="btn btn-sm btn-info btn-lg">L&ecirc mais</button></a>
                 </div>
       </div> 
  </div>

    <?php
    }
    } else {
        echo "0 resultados";
    }
    $conn->close();
    ?>



</div>







   </section>
   
   
   
  <!-- =============================-->
  
   <!-- ====================================================-->

<?php
include ("footer.php");
?>