# Prueba técnica de desarrollo Web PHP + Laravel

En esta prueba se espera evidenciar la calidad del código, uso de herramientas o frameworks, entendimiento del requerimiento, usabilidad y uso de git.

## POST CRUD

Objetivo: Crear una aplicacion de Laravel que permita consumir, almacenar, mostrar y modificar publicaciones ("posts") del servicio externo ([https://jsonplaceholder.typicode.com](https://jsonplaceholder.typicode.com/posts)).

Herramientas sugeridas: Laravel, SQLite, cualquier marco de frontend que consideres conveniente (Vue.js, React, etc.)

### Parte 1: Consumir y almacenar publicaciones

1.1 Crea un nuevo proyecto Laravel.

1.2 Configura SQLite como tu sistema de base de datos.

1.3 Crea una migración para una nueva tabla llamada "posts". Esta tabla debe tener las siguientes columnas: id, title, body y userId.

1.4 Crea un "seeder" que consuma la API https://jsonplaceholder.typicode.com/posts y almacene cada publicación en la tabla "posts".

### Parte 2: Mostrar y modificar publicaciones

2.1 Crea una vista (página web) que muestre todas las publicaciones almacenadas en la base de datos. Debe incluirse la opción de seleccionar una publicación para modificarla.

2.2 Crea una vista (página web) que permita modificar una publicación seleccionada. Debes poder cambiar el título y el cuerpo de la publicación.

### Parte 3: Crear una API para consumir publicaciones

3.1 Crea un controlador API que permita consumir las publicaciones almacenadas en la base de datos.

3.2 El controlador debe tener al menos dos métodos: uno para obtener todas las publicaciones y otro para obtener una sola publicación por su ID.

3.3 Prueba tus endpoints utilizando Postman o cualquier cliente de API que prefieras.

## Entrega

Por favor, proporciona el código fuente del proyecto completo, puede ser enviando un pull request a este mismo repositorio o un enlace a un repositorio nuevo.
