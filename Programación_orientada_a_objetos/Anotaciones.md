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