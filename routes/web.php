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

Route::get('/', function () {
    return view('plantilla');
});


// RUTAS
Route::resource('persona','PersonaController');
Route::get('persona/{id}/destroy',[
    'uses'=>'PersonaController@destroy',
    'as'=>'persona.destroy'
]);


Route::resource('personal','PersonalController');
Route::get('personal/{id}/destroy',[
    'uses'=>'PersonalController@destroy',
    'as'=>'personal.destroy'
]);


Route::resource('area','AreaController');
Route::get('area/{id}/destroy',[
    'uses'=>'AreaController@destroy',
    'as'=>'area.destroy'
]);

Route::resource('marca','MarcaController');
Route::get('marca/{id}/destroy',[
    'uses'=>'MarcaController@destroy',
    'as'=>'marca.destroy'
]);

/*
Route::resource('tipoRecurso','TipoRecursoController');
Route::get('tipoRecurso/{id}/destroy',[
    'uses'=>'TipoRecursoController@destroy',
    'as'=>'tipoRecurso.destroy'
]);
*/

/*
Route::resource('recurso','RecursoController');
Route::get('recurso/{id}/destroy',[
    'uses'=>'RecursoController@destroy',
    'as'=>'recurso.destroy'
]);
*/

Route::resource('actividad','ActividadController');
Route::get('actividad/{id}/destroy',[
    'uses'=>'ActividadController@destroy',
    'as'=>'actividad.destroy'
]);

Route::resource('tipoSoporte','TipoSoporteController');
Route::get('tipoSoporte/{id}/destroy',[
    'uses'=>'TipoSoporteController@destroy',
    'as'=>'tipoSoporte.destroy'
]);

Route::resource('soporte','SoporteController');
Route::get('soporte/{id}/destroy',[
    'uses'=>'SoporteController@destroy',
    'as'=>'soporte.destroy'
]);

Route::resource('inventario','InventarioController');
Route::get('inventario/{id}/destroy',[
    'uses'=>'InventarioController@destroy',
    'as'=>'inventario.destroy'
]);

Route::resource('bajaRecurso','BajaRecursoController');
Route::get('bajaRecurso/{id}/destroy',[
    'uses'=>'BajaRecursoController@destroy',
    'as'=>'bajaRecurso.destroy'
]);

Route::resource('rol','RolController');
Route::get('rol/{id}/destroy',[
    'uses'=>'RolController@destroy',
    'as'=>'rol.destroy'
]);

Route::resource('privilegio','PrivilegioController');
Route::get('privilegio/{id}/destroy',[
    'uses'=>'PrivilegioController@destroy',
    'as'=>'privilegio.destroy'
]);

Route::resource('usuario','UsuarioController');
Route::get('usuario/{id}/destroy',[
    'uses'=>'UsuarioController@destroy',
    'as'=>'usuario.destroy'
]);


// pruebassss
Route::resource('tipoProducto','TipoProductoController');
Route::get('tipoProducto/{id}/destroy',[
    'uses'=>'TipoProductoController@destroy',
    'as'=>'tipoProducto.destroy'
]);

Route::get('producto/buscar', 'ProductoController@buscar')->name('producto.buscar');
Route::resource('producto','ProductoController');




Route::resource('formulario','FormularioController');
Route::get('formulario/{id}/destroy',[
    'uses'=>'FormularioController@destroy',
    'as'=>'formulario.destroy'
]);


Route::resource('compra','CompraController');
Route::get('compra/{id}/destroy',[
    'uses'=>'CompraController@destroy',
    'as'=>'compra.destroy'
]);

