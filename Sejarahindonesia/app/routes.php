<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('Halaman.index');
});
Route::resource("Halaman", "BerandaController");
Route::resource("Admin", "AdminController");
Route::resource("Sejarahindonesia", "SejarahindonesiaController");
Route::resource("Sejarahibukota", "SejarahibukotaController");
Route::resource("Tentangprogrammer", "TentangprogrammerController");
Route::resource("Tentangbsi", "TentangbsiController");
Route::resource("Adminmenu", "AdminmenuController");
Route::resource("Registration", "RegistrationController");
Route::resource("Jakarta", "JakartaController");
Route::resource("Tablejakarta", "TablejakartaController");
Route::resource("Aceh", "AcehController");
Route::resource("Bali", "BaliController");
Route::resource("Banten", "BantenController");
Route::resource("Bengkulu", "BengkuluController");
Route::resource("Gorontalo", "GorontaloController");
Route::resource("Jambi", "JambiController");
Route::resource("Jawabarat", "JawabaratController");
Route::resource("Jawatengah", "JawatengahController");
Route::resource("Jawatimur", "JawatimurController");
Route::resource("Preview", "PreviewController");
Route::resource("Sumaterautara", "SumaterautaraController");
Route::resource("Sumateraselatan", "SumateraselatanController");
Route::resource("Sumaterabarat", "SumaterabaratController");

Route::resource("Previewjakarta", "PreviewjakartaController");
Route::resource("Previewaceh", "PreviewacehController");
Route::resource("Previewsumaterautara", "PreviewsumutController");
Route::resource("Previewsumaterabarat", "PreviewsumbarController");
Route::resource("Previewsumateraselatan", "PreviewsumselController");
Route::resource("Previewriau", "PreviewriauController");
Route::resource("Previewjambi", "PreviewjambiController");
Route::resource("Previewbengkulu", "PreviewbengkuluController");
Route::resource("Previewlampung", "PreviewlampungController");
Route::resource("Previewkepriau", "PreviewkepriauController");
Route::resource("Previewkepbangka", "PreviewkepbangkaController");
Route::resource("Previewbanten", "PreviewbantenController");
Route::resource("Previewjawabarat", "PreviewjawabaratController");
Route::resource("Previewjawatengah", "PreviewjawatengahController");
Route::resource("Previewjawatimur", "PreviewjawatimurController");
Route::resource("Previewjogja", "PreviewjogjaController");
Route::resource("Previewbali", "PreviewbaliController");
Route::resource("Previewmaluku", "PreviewmalukuController");
Route::resource("Previewmalukuutara", "PreviewmalukuutaraController");
Route::resource("Previewntt", "PreviewnttController");
Route::resource("Previewntb", "PreviewntbController");
Route::resource("Previewkalbar", "PreviewkalbarController");
Route::resource("Previewkalteng", "PreviewkaltengController");
Route::resource("Previewkaltim", "PreviewkaltimController");
Route::resource("Previewkalut", "PreviewkalutController");
Route::resource("Previewkalsel", "PreviewkalselController");
Route::resource("Previewsulsel", "PreviewsulselController");
Route::resource("Previewsulut", "PreviewsulutController");
Route::resource("Previewsulbar", "PreviewsulbarController");
Route::resource("Previewsulteng", "PreviewsultengController");
Route::resource("Previewsultenggara", "PreviewsultenggaraController");
Route::resource("Previewgorontalo", "PreviewgorontaloController");
Route::resource("Previewpapua", "PreviewPapuaController");
Route::resource("Previewpapuabarat", "PreviewpapuabaratController");
Route::resource("Lockpattern", "LockpatternController");

Route::resource("Soekarno", "SoekarnoController");
Route::resource("Presiden1", "Presiden1Controller");
Route::resource("Presiden2", "Presiden2Controller");
Route::resource("Presiden3", "Presiden3Controller");
Route::resource("Presiden4", "Presiden4Controller");

Route::resource("Peninggalan", "PeninggalanController");
Route::resource("Tokohnasional", "TokohController");

Route::resource("Presidensoekarno", "PresidensoekarnoController");
Route::resource("Presidensoeharto", "PresidensoehartoController");
Route::resource("Presidenhabibi", "PresidenhabibiController");
Route::resource("Presidengusdur", "PresidengusdurController");

Route::post("Jakarta/post", "JakartaController@store");
Route::get("Jakarta/{id}/destroy", "JakartaController@destroy");
Route::get('Jakarta/edit/{id}', 'JakartaController@edit');
Route::post('Jakarta/update/{id}', array('as' => 'Jakarta.update', 'uses' => 'JakartaController@update'));


Route::post("Registration/post", "RegistrationController@store");
Route::get("Registration/{id}/destroy", "RegistrationController@destroy");
Route::get('Registration/edit/{id}', 'RegistrationController@edit');
Route::post('Registration/update/{id}', array('as' => 'Registration.update', 'uses' => 'RegistrationController@update'));

Route::post("Aceh/post", "AcehController@store");
Route::get("Aceh/{id}/destroy", "AcehController@destroy");
Route::get('Aceh/edit/{id}', 'AcehController@edit');
Route::post('Aceh/update/{id}', array('as' => 'Aceh.update', 'uses' => 'AcehController@update'));

Route::post("Bali/post", "BaliController@store");
Route::get("Bali/{id}/destroy", "BaliController@destroy");
Route::get('Bali/edit/{id}', 'BaliController@edit');
Route::post('Bali/update/{id}', array('as' => 'Bali.update', 'uses' => 'BaliController@update'));

Route::post("Banten/post", "BantenController@store");
Route::get("Banten/{id}/destroy", "BantenController@destroy");
Route::get('Banten/edit/{id}', 'BantenController@edit');
Route::post('Banten/update/{id}', array('as' => 'Banten.update', 'uses' => 'BantenController@update'));

Route::post("Bengkulu/post", "BengkuluController@store");
Route::get("Bengkulu/{id}/destroy", "BengkuluController@destroy");
Route::get('Bengkulu/edit/{id}', 'BengkuluController@edit');
Route::post('Bengkulu/update/{id}', array('as' => 'Bengkulu.update', 'uses' => 'BengkuluController@update'));

Route::post("Gorontalo/post", "GorontaloController@store");
Route::get("Gorontalo/{id}/destroy", "GorontaloController@destroy");
Route::get('Gorontalo/edit/{id}', 'GorontaloController@edit');
Route::post('Gorontalo/update/{id}', array('as' => 'Gorontalo.update', 'uses' => 'GorontaloController@update'));

Route::post("Jambi/post", "GorontaloController@store");
Route::get("Jambi/{id}/destroy", "GorontaloController@destroy");
Route::get('Jambi/edit/{id}', 'GorontaloController@edit');
Route::post('Jambi/update/{id}', array('as' => 'Gorontalo.update', 'uses' => 'GorontaloController@update'));

Route::post("Jawabarat/post", "JawabaratController@store");
Route::get("Jawabarat/{id}/destroy", "JawabaratController@destroy");
Route::get('Jawabarat/edit/{id}', 'JawabaratController@edit');
Route::post('Jawabarat/update/{id}', array('as' => 'Jawabarat.update', 'uses' => 'JawabaratController@update'));

Route::post("Jawatengah/post", "JawatengahController@store");
Route::get("Jawatengah/{id}/destroy", "JawatengahController@destroy");
Route::get('Jawatengah/edit/{id}', 'JawatengahController@edit');
Route::post('Jawatengah/update/{id}', array('as' => 'Jawatengah.update', 'uses' => 'JawatengahController@update'));

Route::post("Jawatimur/post", "JawatimurController@store");
Route::get("Jawatimur/{id}/destroy", "JawatimurController@destroy");
Route::get('Jawatimur/edit/{id}', 'JawatimurController@edit');
Route::post('Jawatimur/update/{id}', array('as' => 'Jawatimur.update', 'uses' => 'JawatimurController@update'));

Route::post("Presidensoekarno/post", "PresidensoekarnoController@store");
Route::get("Presidensoekarno/{id}/destroy", "PresidensoekarnoController@destroy");
Route::get('Presidensoekarno/edit/{id}', 'PresidensoekarnoController@edit');
Route::post('Presidensoekarno/update/{id}', array('as' => 'Presidensoekarno.update', 'uses' => 'PresidensoekarnoController@update'));

Route::post("Sumaterautara/post", "SumaterautaraController@store");
Route::get("Sumaterautara/{id}/destroy", "SumaterautaraController@destroy");
Route::get('Sumaterautara/edit/{id}', 'SumaterautaraController@edit');
Route::post('Sumaterautara/update/{id}', array('as' => 'Sumaterautara.update', 'uses' => 'SumaterautaraController@update'));

Route::post("Sumaterabarat/post", "SumaterabaratController@store");
Route::get("Sumaterabarat/{id}/destroy", "SumaterabaratController@destroy");
Route::get('Sumaterabarat/edit/{id}', 'SumaterabaratController@edit');
Route::post('Sumaterabarat/update/{id}', array('as' => 'Sumaterabarat.update', 'uses' => 'SumaterabaratController@update'));

Route::post("Sumateraselatan/post", "SumateraselatanController@store");
Route::get("Sumateraselatan/{id}/destroy", "SumateraselatanController@destroy");
Route::get('Sumateraselatan/edit/{id}', 'SumateraselatanController@edit');
Route::post('Sumateraselatan/update/{id}', array('as' => 'Sumateraselatan.update', 'uses' => 'SumateraselatanController@update'));

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');