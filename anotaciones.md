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


for ($variable_index; condición_index; incremento_index) {instrucción}

por ejemplo dentro del parentesis podriamos poner $\text{(i = 1; i} \leq \text{10; i++)}$, esto lo que hará es establecer el index i=1 y por cada iteración se le sumará 1 a i mientras que i sea igual o menor a 10, podemos utilizar estas iteraciones para repetir la instrucción que queramos.

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

Por ejemplo tenemos el array con un solo valor (para hacerlo más fácil)

\$datos=( 'Nombre'=> 'Juan')

Si intentamos acceder a este valor utilizando

foreach( \$datos as \$dato) {echo \$dato}

imprimirá 'Nombre' en pantalla, para acceder a Juan debemos utilizar un puntero más:
foreach( \$datos as $dato=>\$Nombre) {echo \$Nombre}

## Sentencia break y continue
Nos permiten manipular las iteraciones de un ciclo con estas dos sentencias.

Al recorrer un array por ejemplo con foreach(array as unidad) {instrucción} dentro de las instrucciónes si estipulamos un if(unidad = item dentro_del_array) {break;} entonces en este punto, el array dejará de recorrerse sin importar si no terminó.

De igual forma continue en lugar de frenar toda la iteración completa, lo que hará será saltar a la siguiente iteración directamente.

## Función var_dump()
Se utiliza para conocer el tipo de la variable electa, propiedades y su valor.

Por ejemplo de si usamos var_dump('hola') nos devolvera string(4) "hola" que en ordén es tipo de dato, cantidad de digitos y valor de variable. Si lo hacemos con un 10 nos devuelve int(10), su tipo y el valor. Si usamos la función con un array var_dump(array('Carlos','Pepe')) nos retornará array(2){[0]=> string(6) "Carlos" [1]=> string(4) "Pepe"} que en orden nuevamente es tipo de dato, cuantos indices hay dentro del array, \{numero de indice=> tipo de dato(cantidad de digitos) valor\} y esto ultimo se repite por la cantidad de veces que hayan indices (en este ejemplo debería haber sido 2 veces).

Para que esta información sea más legible en el navegador podemos darle click derecho $ \rarr $ ver codigo fuente de la página.

O si queremos mostrarlo en página como se muestra en el codigo fuente podemos encerrarlo entre las etiquetas html "\<pre>"

En un arreglo asociativo nos mostrará igual que en el array indexado pero en lugar de la posición del indice la clave seteada.

Esta función también importante nos deja ver el valor de un booleano (si true o false)

## Función print_r()
Es muy parecido a var_dump() pero más legible, con información más entendible para el humano. El problema es que solo nos devuelve el valor en el caso de los strings y los numeros, con los que se nos podría mezclar cual es cual.

Es muy útil para los arrays, nos dará unicamente la información del tipo de dato (Array) y cada indice númerico apuntando al valor que le corresponde: Array([0]=> "Jose", [1]=> "Juan") por ejemplo.

Para los array asociativos será similar.

El problema con esta función radica también en los booleanos, true retorna 1 y false no retorna nada visible en pantalla

## Funciones
Un bloque de codigo que podemos programar para ejecutar cuantas veces queramos y donde nosotros queramos con un solo bloque de codigo.

Para armar una función utilizamos function nombre_de_función(parametros a usar dentro de las instrucciones){instrucciones}

## Sentencia return
Una sentencia muy importante, más aún cuando estamos trabajando con funciones. return nos permite regresar el resultado a la función llamada misma. Con esto si guardamos en una variable una función que utiliza return adentro tendremos que la variable será igual al valor retornado por la función.

Unicamente se puede retornar un valor por función.

Intentar siempre utilizar las funciones para manejar información y que no muestre nada en pantalla.

## Funciones para cadenas de texto
- htmlspecialchars(str) $ \rarr $ convierte caracteres especiales en entidades html (por ejemplo > en html es \gt, < \lt y & &amp). Esto sirve para la seguridad de la página mas que nada, que los usarios no puedan inyectar codigo, hace que los caracteres especiales queden inutilizados de afuera.
- trim(str) $ \rarr $ elimina todos los espacios en blanco al inicio y al final de un string.
- strlen(str) $ \rarr $ calcula el tamaño de un string.
- substr(str, int, int) $ \rarr $ nos retorna un pedazo del str que se le pasa, el 2do parametro es de donde va a empezar a cortar los caracteres y el 3er parametro es cuantos espacios hacia adelante.
- strtoupper(str) $ \rarr $ Convierte todo el str a mayúscula
- strtolower(str) $ \rarr $ Convierte todo el str a minúscula
- strpos(str, str) $ \rarr $ Nos averigua en que posición se encuentra la letra del segundo parametro

## Funciones para arreglos
- extract(array) $ \rarr $ Nos permite agarrar las claves de un array asociativo y convertirlos en variables existentes fuera del array (por ejemplo si tenemos extract(array(telefono => 1298210))) podríamos llamar a $telefono y utilizar el valor ya conocido por fuera del array.
- array.pop(array) $ \rarr $ elimina el ultimo elemento de un array y lo retorna (osea que lo podemos guardar en una variable al mismo tiempo que lo eliminamos)
- join(str, array) $ \rarr $ nos muestra el array del 2do parametro como str pero con cada elemento de este espaciado por el str del 1er parametro.
- count(array) $ \rarr $ Nos permite conocer cuantos elementos tiene el array.
- sort(array) $ \rarr $ organiza en forma ascendente al array.
- rsort(array) $ \rarr $ organiza en forma descendente al array.
- array_reverse(array) $ \rarr $ invierte los elementos del arreglo.

