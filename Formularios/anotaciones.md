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

Podemos hacer que, en caso de que el usuario intente ingresar a la URL de action sin rellenar y apretar enviar en el formulario (no existirá $_POST), se le redireccione a otra página distinta utilizando justamente if($_POST){instrucción} else {header('Location:URL')}

Este metodo nos envía los datos del formulario por detrás, la única manera de saber los datos que ingresamos en el formulario luego de envíarlo es si hay código PHP en el back que muestre los datos, esto es todo lo contrario con el metodo GET

Con el metodo POST podemos enviar archivos, cuando queremos mostrar información importante y que no queremos que el usuario pueda manipular.

## Metodo GET
Se envían los datos por medio de la URL (Query strings) asimilando la sintaxis de un array, luego de la url original se ubica '?' y cada dato está separado por '&' *URL?clave=valor&clave=valor*

Para recibirlo es de igual forma que con el metodo POST haciendo $_GET con la diferencia de que la información esta a la vista del usuario y puede modificarla modificando el la URL.

Solo utilizaremos este metodo para cuando queremos traer información y mostrarla debido a su poca seguridad ya que el usuario puede inyectar etiquetas html, codigo php y javascript.

Hay una función que podemos utilizar para que no nos inyecten código que ya se había comentado la cual es htmlspecialchars(valor_GET)

Podriamos utilizar el mismo if para redirigir la página en caso de no contar con un dato GET