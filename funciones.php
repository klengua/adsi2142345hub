<?php
/*function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
*/


/*function multiplicarPor2(&$num)
{
    $num *= 2;
}
$numero = 10;
multiplicarPor2($numero);
echo $numero;*/

/* function aumentarNumero(){
      static $numero;
      $numero++;
      echo $numero . '<br />';
   }
   aumentarNumero();
   aumentarNumero();
   aumentarNumero(); */


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
