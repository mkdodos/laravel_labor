<?php

class LaborController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data=Labor::all();
		return View::make('labor.index')->with('data',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('labor.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$row=new Labor();
		$row->name=Input::get('name');
		$row->passport=Input::get('passport');
		$row->nation=Input::get('nation');
		$row->tel=Input::get('tel');
		$row->save();
		return Redirect::to('labor');
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
		$labor=Labor::find($id);
		return View::make('labor.edit')->with('labor',$labor);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$row=Labor::find($id);
		$row->name=Input::get('name');
		$row->passport=Input::get('passport');
		$row->nation=Input::get('nation');
		$row->tel=Input::get('tel');
		$row->save();
		return Redirect::to('labor');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$row=Labor::find($id);
		$row->delete();
		return Redirect::to('labor');
	}


}
