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
/*
Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/',array('as'=>'index','uses'=>'InicioController@Index'));
Route::get('/',array('as'=>'index','uses'=>'InicioController@Index'));

Route::get('/contacto',array('as'=>'contacto','uses'=>'InicioController@Contacto'));
Route::get('/quienes-somos',array('as'=>'quienes-somos','uses'=>'InicioController@Quienessomos'));
Route::get('/servicios',array('as'=>'servicios','uses'=>'InicioController@Servicios'));
Route::get('/nutricion',array('as'=>'nutricion','uses'=>'InicioController@Nutricion'));
Route::get('/profesores',array('as'=>'profesores','uses'=>'InicioController@Profesores'));
Route::get('/clases',array('as'=>'clases','uses'=>'InicioController@Clases'));
Route::get('/horarios',array('as'=>'horarios','uses'=>'InicioController@Horarios'));

/*Route::post('login','UserLoginController@user');
Route::post('register','InicioController@RegistrarCliente');
*/
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/salir',array('as'=>'salir','uses'=>'InicioController@salir','before' => 'auth_user'));

Route::get('/administrador',array('as'=>'administrador','uses'=>'AdministradorController@administrador','before' => 'auth_user'));
Route::get('/gestion_cliente',array('as'=>'gestion_cliente','uses'=>'AdministradorController@Gestion_cliente','before' => 'auth_user'));
Route::get('/gestion_entrenador',array('as'=>'gestion_entrenador','uses'=>'AdministradorController@Gestion_entrenador','before' => 'auth_user'));

Route::get('/mbasico_administrador',array('as'=>'mbasico_administrador','uses'=>'AdministradorController@Mbasico_administrador','before' => 'auth_user'));
Route::get('/mb_region',array('as'=>'mb_region','uses'=>'RegionesController@Mb_region','before' => 'auth_user'));
Route::get('/mb_comuna',array('as'=>'mb_comuna','uses'=>'ComunasController@Mb_comuna','before' => 'auth_user'));
Route::get('/reportes',array('as'=>'reportes','uses'=>'AdministradorController@Reportes','before' => 'auth_user'));
Route::get('/cant_personas',array('as'=>'cant_personas','uses'=>'AdministradorController@Cant_personas'));
Route::get('/cant_clientes_ent',array('as'=>'cant_clientes_ent','uses'=>'AdministradorController@Cant_clientes_ent'));

Route::get('ajax-subcat/{id}',array('as'=>'ajax-subcat','uses'=>'AdministradorController@Ajaxsubcat'));

Route::get('/registrar_ent',array('as'=>'registrar_ent','uses'=>'AdministradorController@Registrar_ent'));
Route::post('registrar_ent','AdministradorController@Registrar_ent');

Route::post('data','AdministradorController@Data'); //GESTION CLIENTE - GESTION ENTRENADOR - RUTINA - EVALUACION
