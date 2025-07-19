# Formularios
## ¿Que son los formularios?
son la etiqueta \<form> en html, la cual sirve para tomar información del usuario desde el navegador.

Se le puede ingresar atributos para darle utilidades extra al form
- id $ \to $ sirve para establecer que queremos que ciertas cosas pasen cuando el usuario ejecute algo (más utilizado con JavaScript)
- name $ \to $ Sirve para conectar con php y pasar los valores que obtendremos con este atributo. Con este atributo le estamos estableciendo un nombre al dato ingresado en el formulario para que así php lo reconozca por este. Si tenemos un formulario de tipo radio donde solo queremos que solo se pueda seleccionar un circulo, el name de ambos inputs debe ser el mismo 
- action $ \to $ Acá especificamos a que archivo se envía el dato del formulario ingresado (enviará al usuario a esta URL)
- method $ \to $ Metodo de envío, existen 2 metodos de envío. Si se deja sin seleccionar se pondrá por URL por defécto.
- type $ \to $ El tipo de formulario que se verá en la página, puede ser de radio, texto, checkbox, etc...
- value $ \to $ El valor que tomará el input en php

Dos o más etiquetas con el mismo name no pueden estar seleccionados al mismo tiempo, si se cambia el valor de uno el otro se borrará y solo uno de los datos se tomará en el submit.

## Metodo POST
Si nosotros no le agregamos un method a nuestro formulario este por defecto no hará nada interesante.

El primer method que miraremos será el POST: primero que nada, recordemos que action nos enviará los datos a la localización especificada. Si utilizamos el method POST, este enviará un array que almacena todos los valores que nosotros pasemos por medio del formulario.

Para ingresar a este array utilizamos $_POST y el atributo name dado será la clave de cada valor del array

Podemos hacer que, en caso de que el usuario intente ingresar a la URL de action sin rellenar y apretar enviar en el formulario (no existirá \$\_POST), se le redireccione a otra página distinta utilizando justamente if(\$\_POST){instrucción} else {header('Location:URL')}

Este metodo nos envía los datos del formulario por detrás, la única manera de saber los datos que ingresamos en el formulario luego de envíarlo es si hay código PHP en el back que muestre los datos, esto es todo lo contrario con el metodo GET

Con el metodo POST podemos enviar archivos, cuando queremos mostrar información importante y que no queremos que el usuario pueda manipular.

## Metodo GET
Se envían los datos por medio de la URL (Query strings) asimilando la sintaxis de un array, luego de la url original se ubica '?' y cada dato está separado por '&' *URL?clave=valor&clave=valor*

Para recibirlo es de igual forma que con el metodo POST haciendo $_GET con la diferencia de que la información esta a la vista del usuario y puede modificarla modificando el la URL.

Solo utilizaremos este metodo para cuando queremos traer información y mostrarla debido a su poca seguridad ya que el usuario puede inyectar etiquetas html, codigo php y javascript.

Hay una función que podemos utilizar para que no nos inyecten código que ya se había comentado la cual es htmlspecialchars(valor_GET)

Podriamos utilizar el mismo if para redirigir la página en caso de no contar con un dato GET

## Enviar datos a la misma página
Nos serviría por ejemplo para validar información en caso que queramos saber desde el back que campos fueron rellenados por el usuario

Podemos envíar la info a la misma página ingresando la misma dirección siendo trabajada en action (esto se puede hacer de forma dinamica) y armando un apartado de código php fuera del fuera de las etiquetas \<html>

Para ingresar a la ruta siendo trabajada de forma dinamica ingresaremos un poco de codigo php en las comillas del atributo action y adentro ingresaremos la variable global $_SERVER para traer el valor del script siendo ejecutado actualmente con htmlspecialchars($_SERVER['PHP_SELF']) y así traeremos la ruta actual del archivo que se está ejecutando (notemos que encerramos al valor con htmlspecialcharts para evitar inyecciones de código)

## Comprobar si un formulario ha sido enviado
Para corroborar si los datos de un formulario habían sido enviados con POST directamente teníamos que utilizar los condicionales con $_POST para corroborar si este array estaba definido.

El problema con el metodo GET es que este array lo podemos definir fuera del formulario modificando la URL. Entonces si hacemos lo mismo no estamos verificando si completamos el formulario si no que si el array fue definido únicamente.

Para esto enviaremos al usuario a otra página con el action en la cual el código php comprobará si se está recibiendo información por medio de POST o GET mediante la variable global \$_SERVER $ \to $ \$_SERVER['REQUEST_METHOD'] y esto nos retornará el metodo de envío como string

Otra forma de corroborar esto es en base al name, corroborando en PHP if (isset($_POST[valor_del_name])){instrucción}.

Cada uno de estos 2 metodos tiene su uso, el primero no corroborá por medio de que formulario se está enviando la info y el 2do si pero no evalúa por que metódo. Entonces si hay solo un formulario en pantalla mejor usar el primero metodo y si hay 2 o más usar el 2do

## Validando un formulario
Para esto redirigiremos con el action al mismo archivo con echo htmlspecialchars($_SERVER['PHP_SELF']) utilizamos el echo para que este código php sea visible en el código fuente de la página y que el action la pueda detectar (recordemos que php normalmente no es visible en el código)

Con esto luego vamos a verificar que se le hayan pasado valores al array con un if en el php del mismo archivo.

Acá van a haber dos cosas que necesitamos ver: 1 $ \to $ Que no se pasen los valores como vacíos, esto lo hacemos con un condicional con la función empty(variable) el cual devuelve un bool dependiendo de si la variable tiene un valor. 2 $ \to $ No queremos que el usuario pueda inyectar código, entonces vamos a hacer htmlspecialchars a las variables. 3 $ \to $ Este es un poco opcional, si queremos ordenar los datos que pone el usuario podemos usar trim(variable) eliminando espacios al pedo y stripslashes($variable) para eliminar \\.

Podemos recortar un poco el código de recién (para limpiar como se ve el texto) usando solo **filter_var(string, filter, array)**, donde el 1er parametro es el valor que queremos filtrar (realmente puede ser cualquier tipo de dato pero este se terminará convirtiendo en string), el 2do parametro es el valor reservado que define como queremos filtrar que empieza FILTER_..., por ejemplo FILTER_SANITIZE_STRING (el cual verifica que el valor no esté vacío, se modifican los caracteres especiales para que se muestren como texto html, elimina espacios y \\) y por último toma el valor opcional de un array para establecer valores minimos y maximos o flags (su sintaxis es ["options"=>["min_range"=>int, "max_range"=>int], "flags"=>FILTER]), los flags es como actuará con ciertos valores especificos, por ejemplo FILTER_NULL_ON_FAILURE devolverá el booleano en caso que pueda interpretarse y devolvera null si no.

También utilizamos FILTER_SANITIZE_EMAIL luego junto a FILTER_VALIDATE_EMAIL en el filter_var() para filtrar el email y que tenga un formato apropiado.

## Operador de fusión null
Un operador (recordemos que estas son las comparaciones que devolvían true o false) el cual nos permite hacer la corroboración de si el GET fue envíado como cuando haciamos

*condición ? instrucción : else_instrucción*

Solo que ahora podemos utilizar

**instrucción_true ?? else_false**, aplicandolo al GET sería $_GET[name] ?? 2da_opción

## Anotaciones de la práctica
La parte lógica es todo lo mismo que vimos hasta ahora, un poco de css agregado.

Cuando queremos que un formulario nos siga mostrando lo que escribimos antes de que nos tire error y no se envíe tenemos que utilizar php en el atributo value del html, en donde se verifique que si se envío un dato vía algún metodo (post o get) este haga un echo sobre el value.

Para mandar un mail automatizado utilizamos mail **($enviar_a, $asunto, $mensaje)**