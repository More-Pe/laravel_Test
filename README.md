PASOS PARA CREAR UN PROYECTO EN LARAVEL

Para esto, debes tener instalado Laravel, PHP y Composer.

1. Situarse en la carpeta donde deseamos crear nuestro proyecto y abrir una terminal.
2. Ejecutar:
   `composer create-project laravel/laravel laravel-nombreDelProyecto`
3. Abrir el proyecto VSC o el IDE de tu preferencia y ejecutar:
   `php artisan serve`
   Esto genera un servidor en vivo, es decir que cuando haya un cambio, se va a reiniciar automáticamente.
   `php artisan install:api` --> yes
4. Poner las rutas necesarias en el archivo /routes/api.php:

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
   `php artisan make:migration create_student(nombre de la tabla)_table`
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

```Schema::create('student', function (Blueprint $table) {
$table->id();
// Escribir las columnas aquí
$table->string('name');
$table->string('email');
$table->string('phone');
$table->string('language');
//
$table->timestamps();
});```

5. Para crear las migraciones:
```php artisan migrate````

Para ver las migraciones se puede desdargar la extensión 'sqlite viewer' y en /database.sqlite hacer click derecho->open with->sqlite viewer

6. Para crear los modelos:
```php artisan make:model NombreDelModelo```, en este caso, será ```php artisan make:model Student```
Se creará el modelo en /app/Models:
```<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
}```

7. Configurar el modelo:
```class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [ //Esto es para decir qué campos van a poder ser alterados
        'name',
        'email',
        'phone',
        'languaje'
    ];
}```

8. Crear el controlador:
```php artisan make:controller /carpeta/nombreDelController``` en este caso, será ```php artisan make:controller studentController```
Si no se pone el nombre de la carpeta donde se desea crear, por defecto se creará en /app/HTTP/Controllers:
```<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
}```
9. 




