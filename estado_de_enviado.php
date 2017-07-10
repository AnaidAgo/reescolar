<?php include "conexao.php";?>
<?php include "header.php";?>
<div class="row">

    <div class="col-sm-4"></div>


    <div class="col-sm-4">


        <?php
        $provincia_a = $_POST['provincia_a'];
        $classificacao_a = $_POST['classificacao_a'];
        $marcador_a = $_POST['marcador_a'];

        $provincia_b = $_POST['provincia_b'];
        $classificacao_b = $_POST['classificacao_b'];
        $marcador_b = $_POST['marcador_b']
        ?>
<hr/>
        <?php
        echo "Provincia 1:" . $provincia_a. " <br/>";
        echo "Classifica&ccedil;&atilde;o 1: " . $classificacao_a . "<br/>";
        echo "Marcador 1:" . $marcador_a . "<br/>";
        echo "<br/>";
        echo "Provincia 2:" . $provincia_b. " <br/>";
        echo "Classifica&ccedil;&atilde;o 2: " . $classificacao_b . "<br/>";
        echo "Marcador 2:" . $marcador_b . "<br/>";


        ?>
<hr/>
        <br/><br/><br/>
        <table class="table table-bordered">
            <tr>
                <td> <?php echo  $provincia_a ?> </td>
                <td class="text-center" width="50px"><?php echo "$classificacao_a <b>-</b>  $classificacao_b" ?></td>
                <td><?php echo$provincia_b ?></td>
            </tr>
        </table>


        <?php
        $sql = "insert into resultados_aovivo (provincia_a, classificacao_a, marcador_a, provincia_b, classificacao_b, marcador_b) values ('{$provincia_a}', '{$classificacao_a}', '{$marcador_a}', '{$provincia_b}' ,'{$classificacao_b}', '{$marcador_b}')";

        if($conn->query($sql)===TRUE) {
            echo "<br/><br/>dados armazenados no banco!";
        }else {
            echo "<br/> <br/> Erro de armazenamento no banco!" . $sql . $conn->error;
        }

        $conn->close();
        ?>



    </div>
</div>

<?php include "footer.php" ?>