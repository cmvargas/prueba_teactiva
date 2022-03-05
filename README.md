
<h1>Configuraciones iniciales</h1>
El proyecto se utlizo laravel,mysql y docker-compose 

Existe dos .env uno para el docker-compose y otro propio de laravel

1. Copiar los dos .env uno en la raiz del proyecto y el otro en la raiz de laravel (carpeta src)
2. correr comando docker-compose up -d --build
3. Si existe un error  como "Failed to open stream: No such file or directory" debes entrar en el contenedor de php de la siguiente forma 

    $ docker exec -it php_teactiva bash 
    $ composer install
    $ php artisan key:generate

4. Debera correr las migraciones con su seeders para ello debe ejecutar :
    $ php artisan migrate --seed

5. Para que trabaje el contenedor con los conjob de laravel debera hacerlo siguiente:
    $ /opt/bin/entrypoint.sh &
6. salir del contenedor con la siguiente instruccion:
    $ exit
7. El proyecto se encuentra corriendo en la direccion web : http://www.varesdev.xyz 

8. Es necesario dar permisos a la carpeta storage. Desde la raiz del proyecto ingresar a src
y digitar:
    $ chmod -R 775 storage
<h1>Nota 1: </h1> El registro de usuarios lo tengo deshabilitado en la direccion web. Se habilita en config/fortify.php, descomentarear  "Features::registration(),"
<h1>Nota 2: </h1> El comando schedule:work esta trabajando cada seis horas en la direccion web
<h1>Nota 3: </h1> En productos, sirve el crud (Crear, eliminar, modificar, ver) y en peticiones se creo solo el crear y eliminar
<h1>Nota 4: </h1> El comando para ejecutar los productos y se inserten en la base de datos es:
    $ php artisan schedule:work

<h1>Nota 5: </h1> existe un boton para crear la peticion y esa peticion se crea en el middleware capturapeticion
