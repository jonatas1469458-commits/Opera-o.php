<?php
require_once 'Operacao.php';

$op1 = new Operacao();

$op1->setValor1($_POST['valor1']);
$op1->setValor2($_POST['valor2']);
$operacao = $_POST['operacao'];
$resultado = null;

if ($operacao == 'somar') {
    $resultado = $op1->somar();

} else if ($operacao == 'subtrair') {
    $resultado = $op1->subtrair();

} else if ($operacao == 'multiplicar') {
    $resultado = $op1->multiplicar();

} else if ($operacao == 'dividir') {
    if ($op1->getValor2() == 0) {
        $resultado = 'Erro: Divisão por zero não é permitida!';
    } else {
        $resultado = $op1->dividir();
    }

} else if($operacao == 'exponenciar') {
    $resultado = $op1->exponenciar();
}

echo '<h2>Resultado: ' . $resultado . '</h2>';
?>
