PASOS PARA CREAR UN PROYECTO EN LARAVEL

Para esto, debes tener instalado Laravel, PHP y Composer.

1. Situarse en la carpeta donde deseamos crear nuestro proyecto y abrir una terminal.
2. Ejecutar:
```composer create-project laravel/laravel laravel-nombreDelProyecto```
3. Abrir el proyecto VSC o el IDE de tu preferencia y ejecutar:
```php artisan serve```
Esto genera un servidor en vivo, es decir que cuando haya un cambio, se va a reiniciar automáticamente.
```php artisan install:api``` --> yes
3. Poner las rutas necesarias en el archivo /routes/api.php:
```
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return "Students list";
});
```
En este ejemplo, si vamos a http://127.0.0.1:8000/api/students veremos renderizado "Students list".

4. Crear las migraciones:
```php artisan make:migration create_student(nombre de la tabla)_table```
Esto crea la tabla en un archivo situado en /database/migrations:
```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            // Escribir las columnas aquí
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
```
Para modificar las columnas, se deben escribir entre el $table->id() y el $table->timpestaamps(), por ejemplo:
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            // Escribir las columnas aquí
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('language');
            //
            $table->timestamps();
        });








