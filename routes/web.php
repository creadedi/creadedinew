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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','site\HomeController@inicio' );
Route::get('quem_sou','site\AboutController@sobre' );
Route::get('que_sei_fazer','site\ServiceController@sobre' );
Route::get('trabalhos','site\WorksController@sobre' );
Route::get('portfolio','site\PortfolioController@sobre' );
Route::get('blog','site\BlogController@sobre' );
Route::get('contato','site\ContactController@sobre' );

/* 
|--------------------------------------------------------------------------
| Portfolio
|--------------------------------------------------------------------------
*/

Route::get('portfolio_interno','site\portfolio\PortfolioInternoController@sobre' );
Route::get('transposul','site\portfolio\TransposulController@sobre' );
Route::get('boutiqueno','site\portfolio\BoutiqueNoController@sobre' );
Route::get('fescher','site\portfolio\FescherController@sobre' );
Route::get('vitoria_carnaval_2015','site\portfolio\VitoriaCarnaval2015Controller@sobre' );
Route::get('superlegal_brinquedos','site\portfolio\SuperLegalBrinquedosController@sobre' );
Route::get('superlegal_natal2014','site\portfolio\SuperLegalBrinquedosNatal2014Controller@sobre' );
Route::get('bianchini_biodiesel','site\portfolio\BianchiniBiodieselController@sobre' );
Route::get('vitoria_carnaval_2014','site\portfolio\VitoriaCarnaval2014Controller@sobre' );
Route::get('modular_cargas','site\portfolio\ModularCargasController@sobre' );
Route::get('spazio_altavista','site\portfolio\SpazioAltaVistaController@sobre' );
Route::get('qmama_baby','site\portfolio\QmamaBabyController@sobre' );
Route::get('extrema_park','site\portfolio\ExtremaParkController@sobre' );
Route::get('maqpress','site\portfolio\MaqpressController@sobre' );
Route::get('vitoria_carnaval_2013','site\portfolio\VitoriaCarnaval2013Controller@sobre' );
Route::get('dia_das_criancas_superlegal','site\portfolio\SuperLegalDiaCriancasController@sobre' );
Route::get('vitlog_transportes','site\portfolio\VitlogTransportesController@sobre' );
Route::get('modular_video_institucional','site\portfolio\ModularInstitucionalController@sobre' );
Route::get('superlegal_florianopolis','site\portfolio\SuperLegalFlorianopolisController@sobre' );
Route::get('superlegal_thirken_bell','site\portfolio\SuperLegalThirkenBellController@sobre' );
Route::get('video_cabanasorsul','site\portfolio\VideoCabanaSorsulController@sobre' );