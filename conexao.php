<?php
/**
 * Created by PhpStorm.
 * User: AnaidPulekikas
 * Date: 7/1/2017
 * Time: 4:45 AM
 */
$servername ="localhost";
$username ="root";
$password ="";
$banco = "fotebol_db";

$conn = new mysqli( $servername, $username, $password, $banco );
if($conn->connect_error) {
    die("conexao falhou: " . $conn->connect_error);
}

?>

<!---->
