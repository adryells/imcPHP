<?php
function imc($peso,$altura){
    return (float)$peso/($altura * $altura);
}
$conexao = mysqli_connect("localhost:3308","root","","imc");
$nome = mysqli_escape_string($conexao,$_POST['nome']);
$alturas = mysqli_escape_string($conexao,$_POST['altura']);
$pesos = mysqli_escape_string($conexao,$_POST['peso']);
$imc = imc($pesos, $alturas);
echo '<br>'.$imc;
$sql = "SELECT * FROM usuarios";
$solicitacao = mysqli_query($conexao, $sql);
if($conexao){
    echo "conexao funcioonou";
}
if($solicitacao){
    echo "<br>"."ok";
}else{
    echo "<br>"."ja sabe ne";
    echo mysqli_error($conexao);
}
?>