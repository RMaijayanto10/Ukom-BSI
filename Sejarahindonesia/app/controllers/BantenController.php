<?php

class BantenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$banten = Banten::All();
		return View::make("Banten.index")->with("data", $banten);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Banten.index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
        'teks' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $banten = new Banten;

		$banten->teks = Input::get('teks');


		$banten->save();

		return Redirect::to('Banten');
        }
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
		$banten = DB::table('balis')->where('id',$id)->first();
      $banten =
      ['bantensbyid' => $banten];
  return View::make('Banten.edit', $banten);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$banten = DB::table('bantens')->where('id',$id)->first();
      $banten =
      ['bantensbyid' => $banten];
  return View::make('Banten.edit', $banten);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$banten = Banten::find($id);
		$banten->delete();
		return Redirect::to("Banten");
	}


}
