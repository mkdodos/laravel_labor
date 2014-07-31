<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function doLogin(){
    // 帳號密碼資料
    $userdata = array(
      'username'  => Input::get('username'),
      'password'  => Input::get('password')
    );

    if (Auth::attempt($userdata)) {
      //驗證成功
      echo 'SUCCESS!';
    } else {
      // 驗證失敗,轉回登入表單,withInput()傳回表單輸入旳值(密碼不傳),在表單的Input::old('username')才有作用
      return Redirect::to('login')->withInput(Input::except('password'));
    }
  }

  //顯示登入表單
  public function showLogin(){
  	return View::make('login');
  }

}
