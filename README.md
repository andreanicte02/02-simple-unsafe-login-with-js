# 02-simple-unsafe-login-with-js

Login utilizando vanilla JS

## Descripción

Tomando como base lo realizado en el repositorio 01, se busca hacer algo de separation of concerns, en este caso tener de forma mas clara el back end y front end del proyecto.

Redactar una pequeña descripción de lo siguiente para desarrollo web
+ backend
+ fronend
+ separation of concerns
+ vanilla JS (no es una libreria o algo, es lo contrario, usar javacript sin ninguna libreria o framework)

## Primera parte

### Back-End

Todo archivo .php no debera de generar nada de html, deberan generar respuesta en formato json.

Deberan de existir dos archivos PHP
+ login_process.php: este procesara las credenciales que se reciban del front-end
  - Analizar y explicar lo siguiente:
    * Como deberian de ser las salidas de este archivo PHP segun lo aprendido del ejercicio 01?.
      + Pista: Si las credenciales son satisfactorias, para este proyecto en especifico, se puede retornar un codigo 204 en el header (204 No Content - Satisfactorio y sin contenido) y en el body del response no enviamos nada.
      + Pista: Si las credenciales son incorrectas, no debemos de usar el status code 2xx, (cual deberiamos de usar?), para este proyeco al tener credenciales incorrectas es necesario enviar alguna informacion en el body del response?
+ current_status.php: este responda en formato json la siguiente informacion:
  + logedUser: booleano que indica si hay o no un usuario logueado actualmente
  + user: string que indica el nombre del usuario (en caso de estar logueado)
  
Nota: En los archivos PHP, todo lo que se envie por `print` es enviado al `body` del _response_, y se puede setear valores del `header` del _response_, utilizando la funcion `header`, por ejemplo: `header("HTTP/1.1 200 OK");`.

### Algunas Herramientas

+ Al terminar lo anterior, con el navegador visualizar directamente el archivo `current_status.php` y validar el content del response
+ Asegurase de que el content type de `current_status.php` sea `application/json`
+ Instalar esta extension https://chrome.google.com/webstore/detail/json-formatter/bcjindcccaagfpapjjmafapmmgkkhgoa
+ Esta extension da un formato JSON a los responses que tengan content type JSON (es decir, si se visita una pagina con content type JSON, se le aplica un formato bonito)
+ Meditar sobre como todo se basa en http requests y http resonse
+ Instalar esta extension https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo
  * Un client REST (REST es un concepto que se vera mas adelante) o un cliente HTTP nos permiten realizar HTTP requests de manera mas controlada. 
  * Se puede ver al navegador como un cliente HTTP que solo realiza http requests con verbos `GET`, y espera recibir responses con content type `text/html`.
+ Probar `current_status.php` desde el cliente REST.

## Segunda Parte - Maquetado

Estando no logueado en Facebook, maquetar una pagina mi_login.html con la misma estructura que la pagina inicial (login) de facebook (https://www.facebook.com/), debera ser lo mas similar posible, tomar en cuenta su comportamiento a la hora de hacer zoom o unzoom.

No utilizar Flexbox (css) ni tampoco maquetado utilizando solo elementos `<table>`, los colores o iconos pueden ser sustituidos por otros.

Utilizar un editor simple, tratar de no utilizar autocompletado y tratar de memorizar todas las propiedades css.
