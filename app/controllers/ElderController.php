<?php

class ElderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data=Elder::all();
		return View::make('elder.index')->with('data',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('elder.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$row=new Elder();
		$row->name=Input::get('name');
		$row->id_num=Input::get('id_num');
		$row->birth=Input::get('birth');
		$row->address=Input::get('address');
		$row->save();
		return Redirect::to('elder');
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
		$row=Elder::find($id);
		return View::make('elder.edit')->with('row',$row);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$row=Elder::find($id);
		$row->name=Input::get('name');
		$row->id_num=Input::get('id_num');
		$row->birth=Input::get('birth');
		$row->address=Input::get('address');
		$row->save();
		return Redirect::to('elder');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$row=Elder::find($id);
		$row->delete();
		return Redirect::to('elder');
	}


}
