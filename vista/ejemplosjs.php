<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos js</title>
</head>

<body>
    <h1 style="text-align: center;">Ejemplos de codigo Javascript</h1>
    <h2>Operaciones Vectores</h2>
    <pre>
    function llenarVector(vector, tam) {
    for (let i = 0; i < tam; i++) {
      vector.push(Math.round(Math.random() * 10));
    }
    return vector;
  }
  
  var llenar = (vector, tam) => {
    for (let i = 0; i < tam; i++) {
      vector.push(Math.round(Math.random() * 10));
    }
    return vector;
  };
  v = new Array();
  
  console.log(llenar(v,2));
  
  var suma = (vector) => {
    var s = 0;
    for (let i = 0; i < vector.length; i++) {
      s = s + vector[i];
    
    }
    return s;
  
  
 
}
console.log("la Suma de los vectores es: " + suma(v));
    </pre>

    <h2>Metodos get y set</h2>
    <pre>
    class persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get nombre(){
        return this._nombre;
    }
    set nombre(nombre){
        return this._nombre;
    }

    get apellido(){
        return this._apellido;
    }
    set apellido(apellido){
        return this._apellido;
    }
    nombreCompleto(){
        return this._nombre+''+this._apellido;
    }
}

class aprendiz extends persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }
    get programa(){
        return this._programa;
    }
    set programa(programa){
        return this._programa;
    }
    
    nombreCompleto(){
        return this._nombre+' '+this._apellido+' '+this._programa+' '+this._ficha;
    }
    
}

    var ap=new aprendiz('thalia','serna','adsi','123');

    
    console.log(ap.nombreCompleto());
    const per=new persona('kevin','serna');
    //console.log(per.nombreCompleto());
    //console.log(per.nombreCompleto());
    //console.log(per.apellido);
    //per.apellido='huertas';
    console.log(per.nombreCompleto());
    //console.log(per.apellido);

    </pre>

    <h2>Mostrar elementos y ciclo for</h2>
    <pre>
    var vec1=[];
var tam=prompt('cuantos datos desea almacenar');
var imp=prompt('que numeros aleatorios desea ver');
// inicio for 

for (let i = 0; i < tam; i++) {
    vec1.push(Math.round(Math.random()*imp));
}
console.log(vec1.join());
    </pre>

    <h2>Semantica y etiquetas HTML</h2>

    <pre>
    <ul>
       <li>header  - Define un encabezado para un documento o una sección.</li>
       <li>nav - Define un conjunto de enlaces de navegación.</li>
        <li>section - Define una sección en un documento</li>
        <li>article - Define un contenido autónomo e independiente</li>
        <li>aside - Define contenido aparte del contenido (como una liarra lateral)</li>
        <li>footer - Define un pie de página para un documento o una sección.</li>
        <li>details - Define detalles adicionales que el usuario puede alirir y cerrar a pedido.</li>
        <li>summary- Define un encabezado para el  elemento.</li>
        </ul>
        
    </pre>



</body>

</html>