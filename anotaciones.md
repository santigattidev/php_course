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