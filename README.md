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

### [Crear modelos] Eloquent ORM de Laravel
- Para crear un modelo por consola

        php artisan make:model ModelExample

#### Cada que ves que creemos el model debemos crear una migration. Podemos usar lo siguiente

- Para crear el modelo y migration juntos

        php artisan make:model ModelExample -m

### Comandos Eloquent
- Ejecutar PHP en consola

        php artisan tinker

![](/img/ArtisanTinker2.png)
![](/img/ArtisanTinker.png)
![](/img/ArtisanTinker3.png)

- Obtener tods los post

        Post::get();

- Obtener todos los post por ID

        Post::find(1);
        Post::find(2);

- Como se puede evidenciar solo se guarda en memoria, si queremos guardar podemos usar:

        $post -> title = Modified Title
        $post -> save();

- Para crear un nuevo registro

        $post = new Post;
        $post -> dni = '23784378'
        $post -> title = 'Segundo Post'
        $post -> save();

- Para eliminar el registro

        $post -> delete();

# Instalar la carpeta LANG - Español
 - Ejecutar los siguientes comandos line x line
###      
        composer require laravel-lang/lang --dev
###       
        composer require laravel-lang/publisher laravel-lang/lang laravel-lang/attributes --dev     
###
        php artisan vendor:publish --provider="LaravelLang\Publisher\ServiceProvider"

- Para activar el idioma ESPAÑOL
###
        php artisan lang:add es