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
	return View::make('hello');
});


//放置在resource controller之前
Route::get('cash/test', function()
{


  $data=Cash::all();




 Excel::create('abc', function($excel)  use($data) {

     // Set sheets
  // Set the title
    $excel->setTitle('Our new awesome title');

    // Chain the setters
    $excel->setCreator('Maatwebsite')
          ->setCompany('Maatwebsite');


    // Call them separately
    $excel->setDescription('A demonstration to change the file properties');
    $excel->sheet('Sheetname', function($sheet) use($data) {

          $sheet->fromArray($data, null, 'A1', false, true);

       });

 // })->store('xls');
 })->download('xls');

 // download

 return Redirect::to('cash');


});

Route::resource('cash', 'CashController');
Route::resource('boss', 'BossController');
Route::resource('labor', 'LaborController');




