<?php

class CashController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return str_plural('labor');//labors,bosses
		$data=Cash::all();
		return View::make('cash.index')->with('data',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cash.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cash=new Cash();
		$cash->spend_date=Input::get('spend_date');
		$cash->item=Input::get('item');
		$cash->note=Input::get('note');
		$cash->amt=Input::get('amt');
		$cash->tax=Input::get('tax');
		$cash->save();
		return Redirect::to('cash');
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

		$data=Cash::find($id);
		return View::make('cash.edit')->with('cash',$data);


	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cash=Cash::find($id);
		$cash->spend_date=Input::get('spend_date');
		$cash->item=Input::get('item');
		$cash->note=Input::get('note');
		$cash->amt=Input::get('amt');
		$cash->tax=Input::get('tax');
		$cash->save();
		return Redirect::to('cash');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cash=Cash::find($id);
		$cash->delete();
		return Redirect::to('cash');
	}


}
