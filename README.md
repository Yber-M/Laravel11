<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Aprendiendo a usar Laravel

- Laragon 6.0
- PHP 8.1.10
- [laravel11.test ](http://laravel11.test)OPEN.

## Comandos en consola[Artisan ]
- Crear controlador vacio

        php artisan make:controller NameController

- Crear controlador para una sola acción(Controlador Invokable)

        php artisan make:controller NameController -i

- Crear controlador resource. Tendrá los 7 métodos(index, create, store, show, edit, update y destroy) y 
también tenemos para el API(solos 5 métodos, no estarán create y edit)


        php artisan make:controller NameController -r
    
        php artisan make:controller NameController --api