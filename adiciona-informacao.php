<?php include("header.php"); ?>

<?php
$conexao = mysqli_connect('localhost', 'root', '', 'sioescolar');

$query = "insert into 'jornalescolar' (titulo, conteudo) values ('{$titulo}', '{$conteudo}')";
mysqli_query($conexao, $query);

?>

<?php
include("footer.php"); ?>


