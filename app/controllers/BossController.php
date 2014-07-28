<?php

class BossController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data=Boss::all();
		return View::make('boss.index')->with('data',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('boss.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$boss=new Boss();
		$boss->name=Input::get('name');
		$boss->id_num=Input::get('id_num');
		$boss->tel=Input::get('tel');
		$boss->save();
		return Redirect::to('boss');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$boss=Boss::find($id);
		return View::make('boss.edit')->with('boss',$boss);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$boss=Boss::find($id);
		$boss->name=Input::get('name');
		$boss->id_num=Input::get('id_num');
		$boss->tel=Input::get('tel');
		$boss->save();
		return Redirect::to('boss');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$boss=Boss::find($id);
		$boss->delete();
		return Redirect::to('boss');
	}


}
