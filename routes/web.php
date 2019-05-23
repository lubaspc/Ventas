<?php


/*
	Este grupo tiene todas las url que no necesitan login
*/

Route::group(['middleware' => 'web'], function(){

	Route::get('/', function () {
    	return view('welcome');
	});

	Route::get('home', function () {
    	return view('welcome');
	});

	//ACCESO CLIENTE VER PEDIDOS
	Route::get('accesocliente', 'InicioController@accessocli')->name('cliente');
	//VISTA DE PEDIDOS CLIENTES
	Route::get('pedidos', 'InicioController@listapedidos');

	/*Lista productos vistacliente*/
	Route::resource('clientespedidos', 'clientespedidos');

	/*Lista productos vistacliente*/
	Route::resource('vistas', 'vistas');

	//Carrito 
	Route::get('cart/show',[
		'as' => 'cart-show',
		'uses' =>'CartController@show'
	]);


	Route::get('cart/add/{productos}',[
		'as'=> 'cart-add',
		'uses' =>'CartController@add'
	]);

	
	Route::get('cart/delete/{productos}',[
		'as'=> 'cart-delete',
		'uses' =>'CartController@delete'
	]);

	Route::get('cart/trash',[
		'as'=> 'cart-trash',
		'uses' =>'CartController@trash'
	]);


	Route::get('cart/update/{productos}/{cantidad}',[
		'as'=> 'cart-update',
		'uses' =>'CartController@update'
	]);

	//Cliente

	Route::get('rclientes', 'InicioController@rclientes');
	Route::get('lpcliente', 'InicioController@lpcliente');
	Route::resource('clientescompra', 'clientescompra');


	Auth::routes();

});
// FIN de middleware web




/*
	Este grupo tiene todas las url que necesitan tener logeo sin importar si son algún tipo de usuarip
*/
Route::group(['middleware' => 'auth'], function(){
	/*          LOGIN              */

	Route::get('/home', 'HomeController@index')->name('home');

// MIDDLEWARE
	Route::get('sin_acceso', function(){
		return view("mensajes.error_acceso")->
			with('msj', 'Privilegios insuficientes para acceder a está sección. <br/> Es necesario iniciar sesión como administrador para tener acceso a esta sección');
	});


	Route::get('sin_acceso2', function(){
		return view("mensajes.error_acceso")->
			with('msj', 'Privilegios insuficientes para acceder a está sección. <br/> Es necesario iniciar sesión como usuario básico para tener acceso a esta sección');
	});

});
//FIN DE MIDDLEWARE



/* 
	Rutas accesibles sólo para el usuario administrador
*/
Route::group(['middleware' => 'usuarioAdmin'], function(){
	//Acceso admin
	Route::get('principaladmin', 'InicioController@accessoadm');
	Route::get('acceso', 'InicioController@accessoadm');

	//ACCESO PARA CRUD
			/*PRINCIPAL DEL ADMINISTRADO*/
	Route::resource('principal_admin', 'principal_adminController');
			/*TIPO DE PAGOS*/
	Route::resource('tipo_pagos', 'tipo_pagosController');
			/* PROVEEDORES*/
	Route::resource('proveedores', 'proveedoresController');
			/* CLIENTES*/
	Route::resource('clientes', 'clientesController');
			/* 	BANCOS*/
	Route::resource('bancos', 'bancosController');
			/* 	CATEGORIAS */
	Route::resource('categorias', 'categoriasController');
			/* 	INSUMOS*/
	Route::resource('insumos', 'insumosController');
			/* 	PEDIDOS */
	Route::resource('pedidos', 'pedidosController');
			/* 	PRODUCTOS */
	Route::resource('productos', 'productosController');
			/* 	VENTAS*/
	Route::resource('ventas', 'ventasController');
			/* 	CTA BANCARIAS*/
	Route::resource('cta_bancarias', 'cta_bancariasController');
			/* 	DETALLE DE VENTAS*/
	Route::resource('detalle_ventas', 'detalle_ventasController');
			/* 	DETALLE DE PEDIDOS*/
	Route::resource('detalle_pedidos', 'detalle_pedidosController');
			/* 	GENERAR PRODUCTOS*/
	Route::resource('generar_productos', 'generar_productosController');
			/* 	DETALLE DE GENERAR PRODUCTOS*/
	Route::resource('detalle_generar_insumos', 'detalle_generar_insumosController');


	//ARCHIVOS

	Route::get('form_archivos', 'archivosController@form_archivos');
	Route::post('guardar_archivos', 'archivosController@guardar_archivos');
	Route::get('ver_archivos', 'archivosController@ver_archivos');
	Route::get('descargar_archivo/{nombre_archivo}','archivosController@descargar_archivo');

	//Reportes

	Route::resource('listadoreportes', 'PDFController');
	Route::get('crear_reporte_ventas/{tipo}', 'PDFController@crear_reporte_ventas');
	Route::get('crear_reporte_proveedores/{tipo}', 'PDFController@crear_reporte_proveedores');


	Route::bind('productos',function($nombre_producto){
		return  App\productos::where('nombre_producto',$nombre_producto)->first();
	});

	//Combo para Detalle de ventas
	Route::get('combo_prod/{id_productos}', 'detalle_ventasController@combo');

	//Actualizar campos Total y Subtotal de ventas
	Route::get('ejecutar_ajax/{cantidad}/{precio_venta}/{id_ventas}', 'detalle_ventasController@actualiza');

});
//FIN middleware usuarioAdmin



