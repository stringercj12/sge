<?php

use Illuminate\Support\Facades\Route;

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

// Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['auth']], function () {
    //home
    Route::get('/home', 'DashboardController@index')->name('url_dashboard');
    Route::get('/home/lista', 'DashboardController@listaUser')->name('url_admin_lista');
    Route::get('/home/menu', 'DashboardController@index')->name('admin.menu');
    Route::get('/home/settings', 'DashboardController@config')->name('admin.settings');
    Route::get('/home/profile', 'DashboardController@profile')->name('url_admin_profile');
    Route::get('/home/cadastro', 'DashboardController@cadastro')->name('url_admin_cadastro');
    Route::get('/home/home', 'DashboardController@home')->name('admin.home');
    Route::get('/home/settings/senhas', 'DashboardController@senhas')->name('admin.settings.senhas');

    Route::get('/home/lista/user/{id}/acao/delete', 'DashboardController@listaUser')->name('url_admin_deletar_user');
    Route::post('/home/editar', 'Admin\UsuarioController@editUser')->name('url_admin_atualiza_perfil');
    Route::get('/home/chat', 'DashboardController@chat')->name('url_admin_chat');
    Route::get('/home/protocolo', 'DashboardController@protocolos')->name('url_admin_protocolo');
    Route::get('/home/notas', 'DashboardController@notas')->name('url_admin_notas');

    // User
    Route::post('/home/novo/user', 'Admin\UsuarioController@create')->name('url_admin_cadastro_create');
    Route::get('/home/logout', 'DashboardController@logout')->name('url_admin_logout');
    Route::get('/home/delete/{id}/user', 'Admin\UsuarioController@delete')->name('url_delete_user');
    Route::get('/home/edit/{id}/user', 'Admin\UsuarioController@edit')->name('url_edit_user');
    Route::get('/home/editar/{id}/user/', 'Admin\UsuarioController@Editar')->name('url_admin_editar_user');
    Route::get('/home/bloquear/{id}/user/{acao}/status', 'Admin\UsuarioController@bloquear')->name('url_bloquear_user');
    Route::post('/home/senha/user/', 'Admin\UsuarioController@editSenha')->name('url_admin_muda_senha');
    Route::get('/home/reset/senha/{id}/user/', 'Admin\UsuarioController@resetSenha')->name('url_admin_resetar_senha');

    // Email
    Route::get('/home/email', 'Admin\EmailController@index')->name('url_admin_email');
    Route::get('/home/email/entrada', 'Admin\EmailController@entrada')->name('url_admin_email_entrada');
    Route::get('/home/email/enviados', 'Admin\EmailController@enviados')->name('url_admin_email_enviados');
    Route::get('/home/email/rascunho', 'Admin\EmailController@rascunho')->name('url_admin_email_rascunho');
    Route::get('/home/email/lixeira', 'Admin\EmailController@lixeira')->name('url_admin_email_lixeira');
    Route::get('/home/email/{id}/read', 'Admin\EmailController@readMail')->name('url_admin_email_read_mail');
    Route::get('/home/email/compose', 'Admin\EmailController@novoEmail')->name('url_admin_email_compose');
    Route::get('/home/email/{id}/delete', 'Admin\EmailController@deleteEmail')->name('delete_email');
    Route::post('/home/email/send', 'Admin\EmailController@enviar_email')->name('enviar_email');


    // Calendar
    Route::get('/home/calendar', 'Admin\CalendarioController@index')->name('url_admin_calendar');

    // Tasks
    Route::get('/home/tasks', 'Admin\TasksController@index')->name('tasks.index');
    Route::post('/home/tasks/store', 'Admin\TasksController@store')->name('tasks.store');

    // Configs do Eventos e calendário

    Route::get('/home/events/list', 'Admin\TasksController@list')->name('tasks.list');
    Route::get('/home/events/create', 'Admin\TasksController@create')->name('tasks.create');
    Route::get('/home/events/edit/{id}', 'Admin\TasksController@edit')->name('tasks.edit');
    Route::get('/home/events/config', 'Admin\TasksConfigController@config')->name('tasks.config');
    Route::post('/home/events/add/color', 'Admin\TasksConfigController@addColor')->name('tasks.config.addColor');
    Route::get('/home/events/list/color', 'Admin\TasksConfigController@listColor')->name('tasks.config.listColor');
});

Route::get('/login', 'LoginController@index')->name('url_login');
Route::post('/login', 'LoginController@authenticate')->name('login');
Route::post('/register', 'LoginController@store')->name('register');
// Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('url_site');

// jefferson14489@gmail.com

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
