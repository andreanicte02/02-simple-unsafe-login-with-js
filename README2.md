## Back-end

Es totalmente invisible para el usuario, conocido como el 'server-side' se refiere al lado del servidor en donde se va desarrollar, se enfoca en bases de datos, scripting, y arquitectura de websites. Es la combinacion de tecnologias y programacion que potencia a un website, el back-end de un website consiste en tres partes que el usuario nunca podra ver:

- server
- application 
- database 



## Front-end

Es la parte con la que los usuarios interactuan, se le conoce como 'client-side', es lo que los usuarios pueden ver, es la practica de producir HTML, CSS y JS para websites o aplicaciones web.



## Separation of concerns

Es un principio de diseño, el cual dice que una implementacion de un website deberia estar separado en tres dominios, por ejemplo:

1. Style and presentation 

   La apariencia del sitio, como se mira

2. Business logic

   Como el sitio se comporta, en respuesta a las acciones de un usuario

3. Content

   Como es presentada la data, pueden ser blogs, posts o articulos

Sin embargo no es la unica separacion que se puede realizar. Cuando los intereses se encuentran bien separados,  se pueden reutilizar, desarollar y actualizar las distintas secciones individuales de forma independiente, ayuda al mantenimiento del sofwtare.



## Vanilla JS

Es java script puro sin ningun framework

## login_process.php

- En el caso que las credenciales sean satifactoria, el status code tendria el valor 204

- En el caso que las credenciales no sean satisfactorias, el status code tendria el valor 401.


Para este proyecto no se retorna nada en el content del body, cuando se ejecuta este archivo.

## current_status.php

 - se especifica en el header el tipo de content que se va usar, en este caso seria 'Content-Type: application/json'

 - se arma el json y se responde el json generado a travez del body




















