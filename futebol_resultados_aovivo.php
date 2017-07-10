
<?php include "header.php";?>
<div class="row">

    <div class="col-sm-4"></div>


    <div class="col-sm-4">
<form class="form-group" method="post" action="estado_de_enviado.php">
    <label for="1">Provincia A:</label>
    <input type="text" class="form-control" name="provincia_a" id="1" required/> <br/><br/>
    <label for="2">Classifica&ccedil;&atilde;o A:</label>
    <input type="number" class="form-control"  name="classificacao_a" id="2" required/><br/><br/>
    <label for="3">Marcador A:</label>
    <input type="text" class="form-control" name="marcador_a" id="3" required><br/><br/>


    <br/> <br/>

    <label for="4">Provincia B:</label>
    <input type="text" class="form-control"  name="provincia_b" id="4" required/><br/><br/>
    <label for="5"> Classifica&ccedil;&atilde;o B:</label>
    <input type="number" class="form-control" name="classificacao_b" id="5" required/><br/><br/>
    <label for="6">Marcador B:</label>
    <input type="text" class="form-control"  name="marcador_b" id="6" required/><br/><br/>
    <input type="submit"  class="btn btn-success" value="Submeter">

</form>


</div>

    <div class="col-sm-4">


    </div>
</div>

<?php include "footer.php" ?>