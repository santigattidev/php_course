# PHP curso
## Introducción
Siempre iniciar xampp y darle start a Apache y MySQL. Todos los proyectos que nosotros querramos ejecutar con un servidor local deberán estar ubicados en C:/xampp/htdocs.

Para ingresar al server ingresamos en el navegador http://localhost/

## Sintaxis basica
Para empezar a escribir en PHP siempre arrancaremos utilizando <?php, todo el codigo php adentro y cerramos el codigo con ?>, luego de esto si quiero puedo agregar codigo html. $\text{echo""}$ que es la primer palabra reservada que aprendimos es el equivalente del console.log() o print().

Para agregar comentarios utilizamos //, # o /* */.

El codigo de php no se puede ver desde el navegador.

## Variables
Definimos una variable utilizando $nombre_de_variable=valor. Los strings pueden ser encerradas entre '', utilizamos estas comillas siempre que no querramos llamar variables dentro del string o "" cuando si. Si utilizamos '' y queremos llamar variables debemos utilizar concatenaciones de strings y variables tal que 'str' . var . 'str' (el '.' concatena en PHP). La forma más segura siempre será utilizando ''

Los double son numeros con decimales, el Null es cuando a una variable no se le ha asignado un valor.

Para conocer el tipo de dato de una variable utilizamos gettype($variable); 

## Constantes
Nos permite establecer un valor y utilizarlo cuantas veces nosotros querramos pero no podemos cambiar el valor de esta constante, las variables que vimos hasta ahora se pueden sobreescribir.

Las constantes se establecen con la función define('NOMBRE_DE_CONSTANTE', valor), este valor no se puede sobreescribir y nos marcá un error que nombre_de_constante ya está definida.

Las constantes son variables globales

    Es buena practica definir las constantes con el nombre en mayúscula

## Arreglo indexado
Formas de almacenar varios valores en una variable utilizando $nombre_de_variable = array(valores separados por ',') o tambien podemos usar [] como en Python. Acá puede entrar cualquier otro valor

para acceder a un valor del array indexado usamos $nombre_de_variable[posición numeríca]

para agregar o superponer valores utilizamos $nombre_de_variable[posición numeríca] = nuevo_valor

## Arreglo asociativo

Esta es la forma de acceder a los valores por medio de un valor asociado en lugar de por su indexación utilizando nuevamente $nombre_de_variable = array(valor_asociado => valor, . . .)

Podemos acceder a estos valores utilizando $nombre_de_variable[valor_asociado]

## Arreglo multidimensional

Consiste en armar arrays dentro de arrays 

Por ejemplo si tenemos $nombre_de_variable=array(array(valores),...,array(valores)) podemos acceder a esta información filtrando en orden nombre_de_variable[Index][Index].

Para hacerlo más entendible vamos a separar en lineas cada array, mirar

## Contar el numero de elementos de un array (count())
Utilizamos la función count(arreglo) para que nos retorne el numero de valores que tenemos dentro de un arreglo.

Si nosotros quisieramos ingresar al ultimo elemento de un array tendremos que utilizar nombre_de_variable[count($nombre_de_variable) - 1]

## Ciclo foreach()
Recorrer arrays, si nosotros quisieramos mostrar valor por valor dentro de \<li>'s independientes en un archivo html deberíamos incluir un codigo php encerrado en varias etiquetas \<li\> distintas tal que 

$$
<li>\ <?php\ echo\ \$nombre\_de\_array[0]>\ \  </li> \\

... \\

<li>\ <?php\ echo\ \$nombre\_de\_array[n]>\ \ </li>
$$

y esto claramente se hace engorroso para arrays muy largos, por lo cual podemos iterar una fracción de codigo deseada. En PHP usaremos $ foreach(\$nombre\_de\_array\ as\ \$nombre\_singular\_descriptivo\_de\_los\_valores\_del\_array) \{función\ a\ ejecutar\ para\ cada\ valor\ del\ array\}$.

En este ej dado anteriormente cada vez que se itere $ \$nombre\_descriptivo $ tomará un nuevo valor más adelante en el array 
$$ \{echo\ '<li>'.\ \$nombre\_descriptivo\ .\ ' </li>'\}$$
nos dará todos los elementos del array enlistados en el html.

## Ordenar arreglos
Contaremos con una función para ordenar arrays, el caso de arrays con str los ordena alfabeticamente y en el caso de arrays con numeros numericamente de mayor a menor o viceversa.

Esta función $sort(\$nombre\_de\_array)$ ordena de menor a mayor y $rsort(\$nombre\_de\_array)$ ordenará al revés.

## Condicional if
$if(condición)\{instrucción\}$, la condición (booleano) y los operadores se escribe de igual forma que en Python.

Si por ejemplo utilizamos el operador ! seguido de una variable definida $(!\$nombre\_de\_variable)$, esto querrá decir que el codigo se ejecutará si $nombre_de_variable no está definida

Podemos trabajar con más de una condición utilizando operadores lógicos, $\&\&$ nos permitirá 