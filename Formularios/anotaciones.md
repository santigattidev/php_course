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

Podemos hacer que