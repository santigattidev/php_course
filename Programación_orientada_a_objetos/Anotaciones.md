# Programación orientada a objetos (POO)
## ¿Que es?
Una forma más eficiente y escalable de trabajar con proyectos, permite que cuando tengamos un programa con muchas funciones, variables, etc sea fácil acceder a estas por un metodo relacional.

## Clases
Las variables dentro de los objetos se llaman *propiedades* y las funciones *metodos*

Para empezar definiendo una clase utilizamos **class NombreDeClase {propiedades y funciones}**. Para asociar las propiedades dentro de una clase usamos **public $nombre_de_propiedad** y para asociar los metodos **public function nombreDeMetodo(){}**. De ahora en más a todos los objetos NombreDeClase se les tendrá que definir las propiedades asignadas a la clase general y tendrán acceso a los metodos asociados.

Para definir las propiedades asignadas a la clase NombreDeClase en cada objeto primero debemos instanciar un objeto de la clase, haciendo **$nombre_de_objeto = new NombreDeClase**; y debajo podemos definir cada propiedad haciendo **$nombre_de_objeto->propiedad = valor** y para acceder a los metodos **$nombre_de_objeto->metodo()**.

## Palabra reservada This
Lo utilizamos dentro de nuestra clase para acceder a los valores de este, ya que no podríamos acceder a propiedades llamandola como $propiedad en una función únicamente, la forma correcta es llamando a la propiedad de adentro de la clase con **$this->propiedad** 

## Metodo constructor
Una forma de no repetir tantas veces la misma linea de codigo para definir las propiedades de cada objeto ($nombre_de_objeto->propiedad = valor).

Lo primero que cambiaremos al definir objetos con el metodo constructor es que los valores de cada propiedad lo pasaremos como parametro, **$nombre_de_objeto = new NombreDeClase(valores_de_propiedades)**

El metodo constructor es el metodo que se ejecuta cada vez que instanciemos un objeto nuevo de la clase, para definir este metodo dentro de la clase debemos definir una función, **function __construct($p_1$,...,$p_n$)** donde cada $p$ serán las propiedades que se encuentran asociadas arriba del construct.

Dentro del construct le pasaremos la misma forma de definir las propiedades que habiamos visto anteriormente (que sabemos que ahora se ejecutará cada vez que se instancie un objeto) $this->$p_n$ = $p_n$, el segundo $p_n$ es el valor de parametro y esto lo repetimos para cada propiedad

Ahora para definir cada propiedad en un objeto unicamente tendremos que instanciar un objeto y pasarle cada valor en ordén como parametro al nuevo objeto instanciado nombre_de_objeto = NombreDeClase($v_1$,...,$v_n$) donde cada $v$ es el valor del parametro en su lugar correspondiente.

## Herencia
Lo utilizamos para crear clases muy similares y que compartan propiedades y metodos entre clases. Para hacer esto únicamente debemos empezar a crear una clase y a la derecha del nombre de la clase escribir la palabra reservada extends NombreDeClase1, quedando **class NombreDeClase2 extends NombreDeClase1** y así le estamos pasando todas las propiedades y metodos de la clase 1 a la nueva clase 2.

Para nosotros agregar otra propiedad a la nueva clase debemos sobreescribir el metodo construct pero para no escribir todo de nuevo y que quede el código engorroso utilizamos function __construct($p_1$,...,$p_n$,$p_m$) con los $p$ siendo las propiedades de la clase padre y $p_m$ la nueva propiedad unica de la nueva clase, dentro del construct escribimos primero **parent::__construct($p_1$,...,$p_n$)** y debajo **$this->$p_m$=$ $p_m$**, la primera linea del código llama al construct de la clase padre y lo pega tal cual, la segunda linea crea la nueva propiedad para la clase.

## Scope en POO
Los tipos de scope son public, private y protected. Son los tipos que tenemos nosotros para cambiar las propiedades y metodos
- **public** $\to$ Cuando nosotros relacionamos propiedades escribiendo public al principio queremos decir que esta propiedad será accesible desde cualquier parte del código.
- **protected** $\to$ La propiedad solo podrá ser accedida desde adentro de la clase y de otras clases que heredaron, esto significa si por ejemplo nosotros creamos una nueva clase heredada de la primera con propiedades protected y definimos un metodo que muestre una de estas propiedades en pantalla nos la devolverá correctamente.
- **private** $\to$ Solo se puede acceder a la propiedad desde adentro de la clase que fue creada. El mismo caso ejemplificado en protected pero con propiedades de la clase 1 private nos dará error acá.

## Clases abstractas
Es una forma de proteger toda nuestra clase ubicando **abstract** detrás de la creación de una nueva clase. Lo que hace esto es que no nos permite acceder a una clase a menos que la heredemos, no podremos ni siquiera utilizar un metodo public que no utilice ninguna propiedad de la clase si no.

## Palabra reservada Static
Una forma de acceder a propiedades y metodos sin necesidad de instanciar la clase (esta ya se tiene que encontrar definida dentro de la clase y con la palabra static delante del scope) utilizando **NombreDeClase::$propiedad o función dentro de la clase**. A las funciones se le puede pasar su respectivo parametro de esta forma.

De paso en este bloque aprendimos que si escribimos una variable seteada dentro de los parametros al definir una función se le establece este valor por defecto en caso de que no se le pase el parametro, **public static function($variable = valor){instrucción}**

Por regla general, está bueno darle a un dato la propiedad static cuando no es un dato único para cada objeto, si no que queremos que de alguna forma se comparta en la misma clase.

## Cadenas de métodos
Si tenemos muchos metodos dentro de un objeto y queremos ejecutar varios de estos a la vez se puede ver un poco engorroso el llamar al objeto y buscar el metodo especifico en cada linea de código, por eso tenemos otro metodo que consiste en solamente llamar una vez al código y de ahí en la misma linea poner todos los metodos a ejecutar:

Primero debemos asegurarnos que los metodos que queremos ejecutar en la misma linea por fuera retornen this y luego ya podemos ejecutar por ejemplo 2 metodos haciendo **$nombre_de_objeto->metodo1()->metodo2()**