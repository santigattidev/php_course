# Cookies y sesiones
## Sesiones
La sesión es una variable que podemos utilizar en diferentes páginas.

Para esto debemos crear como mínimo 2 páginas, una página a la que toda la gente pueda acceder y otra a la que solo los usuarios puedan acceder

Para agregar una sesión en php usamos **session_start()** en todas las páginas en las que utilicemos sesiones. Ahora creamos una sesión con la variable superglobal **$_SESSION[id_key] = id_clave**, así le ponemos un identificador a nuestra sesión, por ejemplo id_key podría ser nombre y id_clave un nombre cualquiera. Estas claves se pueden cambiar

Una vez hecho el paso anterior tendremos creada una sesión y tendremos esta sesión disponible en todas las páginas que hagan uso de las sesiones (utilizando session_start())

La idea de una sesión por lo general es agregar los datos por medio de un formulario y que estos sean corroborados en el backend, así el usuario es guardado dentro de una sesión y cuando se intenta ingresar dentro de una página protegida se corrobora que haya una sesión activa.

Para cerrar sesión podemos usar **session_destroy()**

## Cookies
Pequeños archivos que crea el servidor en las computadoras de los usuarios para que cuando este abra la página puedan cargarse ciertas preferencias

Definimos una cookie en la página utilizando **setcookie(nombre, valor, tiempo, ubicación_de_cookie)**, el parametro name es el nombre de la cookie, el segundo el valor de este, el tercero será el día que está cookie expire y se tenga que volver a crear (lo más normal es usar **time()** y sumarle los segundos correspondientes a la fecha que queremos que expire) y el cuarto donde queremos que este disponible esta cookie (si queremos que esté disponible para todo el dominio dejarlo como "/"). Para llamar a esta variable global utilizamos la variable global **$_COOKIE[nombre]**

Para remover cookies simplemente debemos poner una fecha que ya haya expirado al setearlas, por ejemplo **time()-1**

En las cookies solo se pueden guardar hasta 4mb de información de texto

    Importante acá utilizar htmlspecialcharts() cuando accedemos a las cookies para evitar inyección de código ya que hay plugins de navegador que te permiten cambiarlas manualmente.