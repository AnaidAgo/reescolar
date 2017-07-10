
<?php
///**
// * Created by PhpStorm.
// * User: AnaidPulekikas
// * Date: 7/1/2017
// * Time: 4:45 AM
// */
$servername ="localhost";
$username ="root";
$password ="";
$meu_bd = "jornalonline";
//
$conn = new mysqli( $servername, $username, $password, $meu_bd);
if($conn->connect_error) {
    die("conexao falhou: " . $conn->connect_error);
}
?>