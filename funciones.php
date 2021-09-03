<?php



function sumar_restar_divi($num1, $num2)
{
    $resultado = array(
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'divi' => $num1 / $num2
    );
    return $resultado;
}
$resultado_de_suma_resta_divi = sumar_restar_divi(20, 7);
echo 'La suma es: ' . $resultado_de_suma_resta_divi['suma'] . '<br />';
echo 'La resta es: ' . $resultado_de_suma_resta_divi['resta'] . '<br />';
echo 'La division es: ' . $resultado_de_suma_resta_divi['divi'] . '<br />';
