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

	return View::make('index');
});


// Route::get('profile', array('before' => 'auth.basic', function()
// {
//     //跳出一個瀏覽器的登入視窗
//   //輸入帳號密碼,會和users資料表做驗證
//   return "abc".'<a href='.URL::to('logout').'>Logout</a>';
// }));




Route::get('logout',function(){
Auth::logout(); // log the user out of our application
return Redirect::to('profile'); // redirect the user to the login screen
});

Route::get('profile', array('before' => 'auth', function()
{
  // 'before' => 'auth' 會轉到login
// return "Abc";
return '<a href='. URL::to('logout') .'>Logout</a>';

}));

//顯示登入表單
Route::get('login', array('uses' => 'HomeController@showLogin'));

//驗證登入資料
Route::post('login', array('uses' => 'HomeController@doLogin'));


//放置在resource controller之前
Route::get('cash/import', function(){
  //載入檔案file.xls,指定Sheet1工作表
  //也可不指定工作表,直接載入所有工作表

  $filename= storage_path()."\\exports\abc.xls";


  //Excel::load('file.xls', function($reader) {
  Excel::selectSheets('Sheetname')->load($filename, function($reader) {
    // Getting all results
       $results = $reader->get();
    // $results = $reader->all();


       $reader->get(array('firstname', 'lastname'));
       // echo $reader->first();//取得第一列資料
       // $reader->dump();

       // Loop through all sheets
    //指定欄位
       // $reader->get(array('a'))->each(function($sheet) {
       //限制筆數
      // $reader->limit(1)->each(function($sheet) {
       //限制筆數,指定欄位
        // $reader->limit(4)->get(array('id','spend_date'))->each(function($sheet) {
       $reader->each(function($sheet) {
           // Loop through all rows
           $sheet->each(function($row) {
            // dd($row->a);
              echo $row;
           });

       });


  });
});


//放置在resource controller之前
Route::get('cash/export', function()
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



//有指定使用resource時,額外路由須放在resource controller之前才有作用
Route::get('boss/excel', function()
{
  $data=Boss::all();
  Excel::create('雇主名單', function($excel)  use($data) {
    $excel->sheet('Sheetname', function($sheet) use($data) {
      $sheet->fromArray($data, null, 'A1', false, true);
    });
  })->download('xls');
  return Redirect::to('boss');
});


Route::resource('cash', 'CashController');
Route::resource('boss', 'BossController');
Route::resource('labor', 'LaborController');
Route::resource('elder', 'ElderController');

Route::get('/',function(){
  return str_plural("elder");
});


