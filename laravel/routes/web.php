<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ruta para mostrar los datos
Route::get('/datos','DatosController@index');

//ruta de crear
Route::get('/contactos/create','DatosController@create');

Route::post('/datos','DatosController@store');

//busqueda de datos por ID
Route::get('/datos/{id}','DatosController@show');

//ruta para eliminar
Route::get('/datos/{id}','DatosController@delete')->name("datos.delete");

//ruta para editar
Route::get('/datos/{id}/edit','DatosController@edit')->name("datos.edit");

Route::put('/datos/{id}/update','DatosController@update')->name("datos.update");



//rutas de prueba
Route::get('contactame',function(){
    return "seccion de contactos";
})->name('contactos');

Route::get('/',function(){
echo "<a href='"  . Route('contactos') .  "'>contactos1</a><br>";
echo "<a href='"  . Route('contactos') .  "'>contactos2</a><br>";
echo "<a href='"  . Route('contactos') .  "'>contactos3</a><br>";
echo "<a href='"  . Route('contactos') .  "'>contactos4</a><br>";
echo "<a href='"  . Route('contactos') .  "'>contactos5</a><br>";

});

//Route::get('/contactos','PaginasController@contacto');
/*
Route::get('/acerca','PaginasController@acerca');*/






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
