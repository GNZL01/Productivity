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

// Route::resource('cargos', 'CargoController');



// RUTAS para proyecto de PRODUCTIVITY


// RUTA main para los demas mantenedores, de esta ruta salen el resto

Route::get('/Productivity', 'Controller@showWelcome');

//Route::get('/Menu', 'Controller@showMenu');


//RUTAS para la tabla oee_Cargo de Cargos ingresados

	Route::get('/Productivity/cargos/listar', 'CargoController@listarCargos')->name('cargos.listarCargos');

	Route::get('/Productivity/cargos/verCargo/{car_id}', 'CargoController@verCargo')->name('cargos.verCargo');

	Route::get('/Productivity/cargos/agregarCargo', 'CargoController@agregarCargo')->name('cargos.agregarCargo');
	Route::post('/Productivity/cargos/listar/', 'CargoController@guardarCargo')->name('cargos.guardarCargo');

	Route::get('/Productivity/cargos/editarCargo/{car_id}', 'CargoController@editarCargo')->name('cargos.editarCargo');
	Route::put('/Productivity/cargos/listar/{car_id}', 'CargoController@actualizarCargo')->name('cargos.actualizarCargo');

	Route::delete('/Productivity/cargos/listar/{car_id}', 'CargoController@eliminarCargo')->name('cargos.eliminarCargo');


//RUTAS para la tabla oee_Causa de Causas ingresadas

	Route::get('/Productivity/causas/listar', 'CausaController@listarCausas')->name('causas.listarCausas');

	Route::get('/Productivity/causas/verCausa/{cau_codigo}', 'CausaController@verCausa')->name('causas.verCausa');

	Route::get('/Productivity/causas/agregarCausa', 'CausaController@agregarCausa')->name('causas.agregarCausa');
	Route::post('/Productivity/causas/listar/', 'CausaController@guardarCausa')->name('causas.guardarCausa');
 
	Route::get('/Productivity/causas/editarCausa/{cau_codigo}', 'CausaController@editarCausa')->name('causas.editarCausa');
	Route::put('/Productivity/causas/listar/{cau_codigo}', 'CausaController@actualizarCausa')->name('causas.actualizarCausa');

	Route::delete('/Productivity/cargos/listar/{cau_codigo}', 'CausaController@eliminarCausa')->name('causas.eliminarCausa');


//RUTAS para la tabla oee_empresa de Empresas ingresadas

	Route::get('/Productivity/empresas/listar', 'EmpresaController@listarEmpresas')->name('empresas.listarEmpresas');

	Route::get('/Productivity/empresas/verEmpresa/{emp_rut}', 'EmpresaController@verEmpresa')->name('empresas.verEmpresa');

	Route::get('/Productivity/empresas/agregarEmpresa', 'EmpresaController@agregarEmpresa')->name('empresas.agregarEmpresa');
	Route::post('/Productivity/empresas/listar/', 'EmpresaController@guardarEmpresa')->name('empresas.guardarEmpresa');

	Route::get('/Productivity/empresas/editarEmpresa/{emp_rut}', 'EmpresaController@editarEmpresa')->name('empresas.editarEmpresa');
	Route::put('/Productivity/empresas/listar/{emp_rut}', 'EmpresaController@actualizarEmpresa')->name('empresas.actualizarEmpresa');

	Route::delete('/Productivity/empresas/listar/{emp_rut}', 'EmpresaController@eliminarEmpresa')->name('empresas.eliminarEmpresa');


//RUTAS para la tabla oee_Evento de Eventos ingresados

	Route::get('/Productivity/eventos/listar', 'EventoController@listarEventos')->name('eventos.listarEventos');

	Route::get('/Productivity/eventos/verEvento/{eve_id}', 'EventoController@verEvento')->name('eventos.verEvento');

	Route::get('/Productivity/eventos/agregarEvento', 'EventoController@agregarEvento')->name('eventos.agregarEvento');
	Route::post('/Productivity/eventos/listar/', 'EventoController@guardarEvento')->name('eventos.guardarEvento');

	Route::get('/Productivity/eventos/editarEvento/{eve_id}', 'EventoController@editarEvento')->name('eventos.editarEvento');
	Route::put('/Productivity/eventos/listar/{eve_id}', 'EventoController@actualizarEvento')->name('eventos.actualizarEvento');

	Route::delete('/Productivity/eventos/listar/{eve_id}', 'EventoController@eliminarEvento')->name('eventos.eliminarEvento');


//RUTAS para la tabla oee_faena de Faenas ingresadas

	Route::get('/Productivity/faenas/listar', 'FaenaController@listarFaenas')->name('faenas.listarFaenas');

	Route::get('/Productivity/faenas/verFaena/{fae_id}', 'FaenaController@verFaena')->name('faenas.verFaena');

	Route::get('/Productivity/faenas/agregarFaena', 'FaenaController@agregarFaena')->name('faenas.agregarFaena');
	Route::post('/Productivity/faenas/listar/', 'FaenaController@guardarFaena')->name('faenas.guardarFaena');

	Route::get('/Productivity/faenas/editarFaena/{fae_id}', 'FaenaController@editarFaena')->name('faenas.editarFaena');
	Route::put('/Productivity/faenas/listar/{fae_id}', 'FaenaController@actualizarFaena')->name('faenas.actualizarFaena');

	Route::delete('/Productivity/faenas/listar/{fae_id}', 'FaenaController@eliminarFaena')->name('faenas.eliminarFaena');


//RUTAS para la tabla oee_fundo de Fundos ingresados

	Route::get('/Productivity/fundos/listar', 'FundoController@listarFundos')->name('fundos.listarFundos');

	Route::get('/Productivity/fundos/verFundo/{fun_id}', 'FundoController@verFundo')->name('fundos.verFundo');

	Route::get('/Productivity/fundos/agregarFundo', 'FundoController@agregarFundo')->name('fundos.agregarFundo');
	Route::post('/Productivity/fundos/listar/', 'FundoController@guardarFundo')->name('fundos.guardarFundo');

	Route::get('/Productivity/fundos/editarFundo/{fun_id}', 'FundoController@editarFundo')->name('fundos.editarFundo');
	Route::put('/Productivity/fundos/listar/{fun_id}', 'FundoController@actualizarFundo')->name('fundos.actualizarFundo');

	Route::delete('/Productivity/fundos/listar/{fun_id}', 'FundoController@eliminarFundo')->name('fundos.eliminarFundo');


//RUTAS para la tabla oee_maquina de Maquinas ingresadas

	Route::get('/Productivity/maquinas/listar', 'MaquinaController@listarMaquinas')->name('maquinas.listarMaquinas');

	Route::get('/Productivity/maquinas/verMaquina/{maq_id}', 'MaquinaController@verMaquina')->name('maquinas.verMaquina');

	Route::get('/Productivity/maquinas/agregarMaquina', 'MaquinaController@agregarMaquina')->name('maquinas.agregarMaquina');
	Route::post('/Productivity/maquinas/listar/', 'MaquinaController@guardarMaquina')->name('maquinas.guardarMaquina');

	Route::get('/Productivity/maquinas/editarMaquina/{maq_id}', 'MaquinaController@editarMaquina')->name('maquinas.editarMaquina');
	Route::put('/Productivity/maquinas/listar/{maq_id}', 'MaquinaController@actualizarMaquina')->name('maquinas.actualizarMaquina');

	Route::delete('/Productivity/maquinas/listar/{maq_id}', 'MaquinaController@eliminarMaquina')->name('maquinas.eliminarMaquina');


//RUTAS para la tabla oee_trabajador de Trabajadores ingresados

	Route::get('/Productivity/trabajadores/listar', 'TrabajadorController@listarTrabajadores')->name('trabajadores.listarTrabajadores');

	Route::get('/Productivity/trabajadores/verTrabajador/{tra_id}', 'TrabajadorController@verTrabajador')->name('trabajadores.verTrabajador');

	Route::get('/Productivity/trabajadores/agregarTrabajdor', 'TrabajadorController@agregarTrabajador')->name('trabajadores.agregarTrabajador');
	Route::post('/Productivity/trabajadores/listar/', 'TrabajadorController@guardarTrabajador')->name('trabajadores.guardarTrabajador');

	Route::get('/Productivity/trabajadores/editarTrabajador/{tra_id}', 'TrabajadorController@editarTrabajador')->name('trabajadores.editarTrabajador');
	Route::put('/Productivity/trabajadores/listar/{tra_id}', 'TrabajadorController@actualizarTrabajador')->name('trabajadores.actualizarTrabajador');

	Route::delete('/Productivity/trabajadores/listar/{tra_id}', 'TrabajadorController@eliminarTrabajador')->name('trabajadores.eliminarTrabajador');
