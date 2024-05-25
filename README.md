<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Aprendiendo a usar Laravel

- Laragon 6.0
- PHP 8.1.10
- [laravel11.test ](http://laravel11.test)OPEN.

## Comandos en consola 
### [Crear Controladores]
Route -> app/http/Controllers
- Crear controlador vacio

        php artisan make:controller NameController

- Crear controlador para una sola acción(Controlador Invokable)

        php artisan make:controller NameController -i

- Crear controlador resource. Tendrá los 7 métodos(index, create, store, show, edit, update y destroy) y 
también tenemos para el API(solos 5 métodos, no estarán create y edit)


        php artisan make:controller NameController -r
    
        php artisan make:controller NameController --api
### [Crear DB con migraciones]
| Route -> app/database/migrations

- Crear una migración
        
        php artisan make:migrations name_the_migration

- Migrar todo y utilizar el método UP

        php artisan migrate

- Se utlizará los métodos DOWN(Drop)

        php artisan migrate:rollback

- Eliminará todas las tablas y ejecturá todas las migraciones desde 0. (Usar cuando no se está en producción, ya que se borrará todos los datos de la DB)


        php artisan migrate:fresh

- Podemos usar este comando para actualizar la estructura de una tabla sin perder datos. (En este caso detectara el caracter "to" y creará la estructura automáticamente para hacer dicha acción)

        php artisan make:migration addexample_bodyexample_to_namemigrations_table
### Puedes ver la siguiente documentación para hacer tu DB con Laravel -> [Tipos de columna disponibles](https://laravel.com/docs/10.x/migrations#available-column-types)