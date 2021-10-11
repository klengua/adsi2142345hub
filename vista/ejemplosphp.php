<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos ejercios php</title>
</head>

<body>
    <h1 style="text-align: center;">Ejemplos de ejercicios hechos en PHP</h1>
    <h2>Programacion orientada a objetos</h2>
    <pre>


    class Aprendiz
    {
        //atributos
        private $nombre;
        private $programa;
        private $ficha;
        //metodos
        function saludar()
        {
            echo "<br>  Hola, soy $this->nombre un aprendiz muy alegre del programa  $this->programa mi ficha es: $this->ficha ";
        }

        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        function setPrograma($programa)
        {
            $this->programa = $programa;
        }
        function setFicha($ficha)
        {
            $this->ficha = $ficha;
        }

        function getNombre()
        {
            return $this->nombre;
        }
        function getPrograma()
        {
            return $this->programa;
        }
        function getFicha()
        {
            return $this->ficha;
        }
    }
    $user = new Aprendiz();
    $user->setNombre("galletita");
    $user->setPrograma("galletitados");
    $user->setFicha("galletitatres");
    //echo '...'.$user->nombre;//nombre tendría que ser público


    //primer aprendiz
    $ob1 = new Aprendiz();
    $ob1->setNombre(" Maria");
    $ob1->setPrograma("ADSI");
    $ob1->setFicha("12345");
    $ob1->saludar();
    echo 'Me llamo ' . $ob1->getNombre();

    //var_dump($objeto);

    </pre>

    <h2>Operaciones</h2>
    <pre>

        function sumaVector($vector)
        {
            $sum = 0;
            for ($i = 0; $i < count($vector); $i++) {
                $sum += $vector[$i];
            }
            return $sum;
        }
        function promedioVector($vector)
        {
            $sum = 0;
            for ($i = 0; $i < count($vector); $i++) {
                $sum += $vector[$i];
            }
            return $sum / count($vector);
        }



        $vector1 = array();

        $vector2 = [34, 56, 11];

        for ($i = 0; $i < 3; $i++) {
            $vector1[$i] = rand(0, 10);
        }

        for ($i = 0; $i < count($vector1); $i++) {
            echo $vector1[$i] . ', ';
        }

        echo '<br> la suma de vector es = ' . sumaVector($vector2);
        echo '<br> promedio de vector es  = ' . promedioVector($vector2);
        echo '<br> la suma de vector de numeros al azar es =' . sumaVector($vector1);
        echo '<br> promedio de vector de numeros al azar es  = ' . promedioVector($vector1);
         
    </pre>

    <h2>PDO</h2>
    <pre>
    //PDO= PHP Data Objects
$dsn='mysql:host=localhost;dbname=adsi';
$usuario='root';
$psw='';
$cnx='';
try{
$cnx=new PDO($dsn,$usuario,$psw);
$statement=$cnx->prepare('select * from aprendiz');
$statement->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}

foreach ($statement as $key) {
    echo $key[0].'<br>';
}
echo 'Linea final EOF php'
    </pre>














</body>

</html>