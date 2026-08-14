<?php

require_once __DIR__ . '/operacao.php';

$calculadora = new Operacao();

// Se vier via POST, usar os valores do formulário; caso contrário, valores de exemplo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$valor1 = isset($_POST['valor1']) ? floatval($_POST['valor1']) : 0;
	$valor2 = isset($_POST['valor2']) ? floatval($_POST['valor2']) : 0;
	$operacao = isset($_POST['operacao']) ? $_POST['operacao'] : 'somar';
} else {
	$valor1 = 10;
	$valor2 = 2;
	$operacao = 'somar';
}

$calculadora->setValor1($valor1);
$calculadora->setValor2($valor2);

echo "Valor 1: " . $calculadora->getValor1() . "<br>";
echo "Valor 2: " . $calculadora->getValor2() . "<br><br>";

switch ($operacao) {
	case 'somar':
		$resultado = $calculadora->somar();
		$label = 'Soma';
		break;
	case 'subtrair':
		$resultado = $calculadora->subtrair();
		$label = 'Subtração';
		break;
	case 'multiplicar':
		$resultado = $calculadora->multiplicar();
		$label = 'Multiplicação';
		break;
	case 'dividir':
		$resultado = $calculadora->dividir();
		$label = 'Divisão';
		break;
	case 'exponenciar':
		$resultado = $calculadora->exponenciar();
		$label = 'Exponenciação';
		break;
	default:
		$resultado = 'Operação inválida';
		$label = 'Resultado';
}

echo $label . ": " . $resultado . "<br>";

?>
