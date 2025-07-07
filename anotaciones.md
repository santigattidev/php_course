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

para acceder a un valor del array indexado usamos $ \$nombre\_de\_variable[posición\ numeríca]$

para agregar o superponer valores utilizamos $ \$nombre\_de\_variable[posición\ numeríca] = nuevo\_valor $

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

y esto claramente se hace engorroso para arrays muy largos, por lo cual podemos iterar una fracción de codigo deseada. En PHP usaremos $$ foreach(\$nombre\_de\_array\ as\ \$nombre\_singular\_descriptivo\_de\_los\_valores\_del\_array) \\
\{función\ a\ ejecutar\ para\ cada\ valor\ del\ array\}$$

En este ej dado anteriormente cada vez que se itere $ \$nombre\_descriptivo $ tomará un nuevo valor más adelante en el array 
$$ \{echo\ '<li>'.\ \$nombre\_descriptivo\ .\ ' </li>'\}$$
nos dará todos los elementos del array enlistados en el html.

## Ordenar arreglos
Contaremos con una función para ordenar arrays, el caso de arrays con str los ordena alfabeticamente y en el caso de arrays con numeros numericamente de mayor a menor o viceversa.

Esta función $sort(\$nombre\_de\_array)$ ordena de menor a mayor y $rsort(\$nombre\_de\_array)$ ordenará al revés.

## Condicional if
$if(condición)\{instrucción\}$, la condición (booleano) y los operadores se escribe de igual forma que en Python.

Si por ejemplo utilizamos el operador ! seguido de una variable definida $(!\$nombre\_de\_variable)$, esto querrá decir que el codigo se ejecutará si $nombre_de_variable no está definida

Podemos trabajar con más de una condición utilizando operadores lógicos, && nos permitirá concatenar más de una condición a cumplir para que se ejecute la instrucción $if(condición1$ && $condición2)\{instrucción\}$

## Sentencia else y else if
Primero que nada el agregar if dentro de if's se lo conoce como anidar condicionales

Utilizaremos else para cuando no se cumpla ninguna de las condiciones estipuladas y queremos que igualmente en este caso se ejecute una instrucción.

El else if se implementa cuando tenemos otra condición establecida que al no cumplirse la primera y cumplirse esta ejecutará otra instrucción.

## Operadores
las básicas +,-,*,/ que ni hace falta explicar que hacen. También junto a estos tenemos el de modulo ($\%$), el cual nos permite ver el resto de la división entre el valor a la izquierda y el valor a la derecha.
### Operadores de asignación
Nos permiten hacer operaciones y guardar el valor resultante en la variable de la izquierda, tenemos =, +=, -=, *=, /=. Ya sabemos nuevamente que hace cada uno.

Ej: $\ var_1$+=$var_2$ $\rightarrow$ $var_1 = var_1$+$var_2$

### Operadores de comparación
Utilizados más que nada en condicionales, retornan valores booleanos dependiendo si $var_1$ cumple con la condición del operador de comparación respecto a $var_2$. Los operadores de comparación son == [Si $var_1$ y $var_2$ son iguales], === [verifica si ambos valores son identicos, es decir que tengan el mismo valor y sean el mismo tipo de dato (si $var_1$ y $var_2$ fueran un dato str y un dato int, por más de que seán el mismo número, nos retornará false por el tipo de dato a diferencia de ==)], != [también escrito como <>], !==, >, <, >=, <=.

### Operadores lógicos
Estas agregan condiciones a un condicional, están && [and], **||** [or], $xor$ [Verifica que solo una de las 2 condiciones se cumpla (o $var_1$ o $var_2$)]

### Operadores de incremento y decremento
Agregarán unidades de una en una a la variable especificada. Existen $++\$x$, $\$x++$, $--\$x$, $\$x--$ [La diferencia entre los ++ o -- detrás o adelante es que operación se ejecuta primero].

Por ejemplo: Si hacemos  echo $ \$var_1$++ nos mostrará $var_1$ en pantalla sin la suma de la únidad. En cambio echo ++$ \$var_1$ nos mostrará $var_1$+1 como salida por que la suma se efectuó antes del echo.

### Operadores de Cadenas
Operadores que nos permiten concatenar, tenemos . [añadir $var_2$ delante de $var_1$] y .= [mismo proceso pero reemplaza $var_1$ por $var_2$, funciona como un operador de asignación pero para strings]

## Switch
Una estructura que nos sirve de forma similar a los condicionales. Se utiliza con la palabra reservada \$switch ($\$var_1$ )\{case x: instrucción; break;\}$ donde verifica que si x está en $var_1$ se ejecutará la instrucción y en caso contrarío no.

Podemos sumar más de un caso dentro del switch, pero es importante que pongamos break al final de cada case por que si no no se frenará el switch y seguirá buscando

Hay un case más que es el default, el cual se ejecuta si los casos anteriores no fueron el caso.

## Shorthand if - Condicional corto
Acá se introduce a isset($variable), función que nos indica si una variable está definida o no (nada es que no y 1 es que si).

Ahora si, el shorthand if se hace utilizando 
$$condición\ ?\ instrucción : instrucción\_en\_caso\_contrario$$

## Ciclo for
Nos permite repetir bloques de codigo cuantas veces necesitemos.

$$
for(\$variable \_ index\ ;\ condición \_ respecto \_ index\ ;\ incremento \_ index) \{instrucción\}$$

por ejemplo dentro del parentesis podriamos poner $(i=1, i<=10, i$++$)$, esto lo que hará es establecer el index i=1 y por cada iteración se le sumará 1 a i mientras que i sea igual o menor a 10, podemos utilizar estas iteraciones para repetir la instrucción que queramos.

## Ciclo while
$while(1\ sola\ condición)\{instrucción\}$

## Recorrer arreglos con for y while
$for\ (\$i = 0 ; \$i < count(\$array) ; i++)\ \{instrucción\ con\ array[i]\}$

Lo que aseguramos con esto es: con count tendremos el tope de iteraciones dinamico y dependiente del array, i se irá aumentando iteración por iteración hasta llegar a este y podremos llamar al array númericamente con este valor.

## Ciclo dowhile
El ciclo dowhile es igual al while solo que se invierte el ordén, primero se ejecuta la instrucción y luego se corroborá que la condición que cumpla. Entonces la instrucción siempre se ejecuta como mínimo 1 vez.

$do\{instrucción\}\ while(condición)$

## Ciclo foreach
Retomando el ciclo foreach, supongamos que tenemos un array asociativo, si intentamos acceder al valor del array como antes accederemos a la clave del array en lugar del valor.

Por ejemplo tenemos el array con un solo valor (para hacerlo más fácil) $$ \$datos=(\ 'Nombre'=>\ 'Juan'\ ) $$
Si intentamos acceder a este valor utilizando $ foreach( \$datos\ as\ \$dato)\ \{echo\ \$dato\} $ imprimirá 'Nombre' en pantalla, para acceder a Juan debemos utilizar un puntero más:
$ foreach( \$datos\ as\ \$dato=>\$Nombre)\ \{echo\ \$Nombre\} $
