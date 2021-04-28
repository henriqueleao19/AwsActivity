<?php
//conexão com o banco de dados
$servername = "henrique.c13tpcmhtcl8.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "fatecsaoroque";
$database = "bancosite";

$connect = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()){
    echo "Erro de conexão: " .mysqli_connect_error();
}
