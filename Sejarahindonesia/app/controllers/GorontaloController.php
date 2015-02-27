<?php

class GorontaloController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$gorontalo = Gorontalo::All();
		return View::make("Gorontalo.index")->with("data", $gorontalo);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Gorontalo.index');
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
        $gorontalo = new Gorontalo;

		$gorontalo->teks = Input::get('teks');


		$gorontalo->save();

		return Redirect::to('Gorontalo');
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
	    $gorontalo = DB::table('gorontalos')->where('id',$id)->first();
      $gorontalo =
      ['gorontalosbyid' => $gorontalo];
  return View::make('Gorontalo.edit', $gorontalo);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'teks' => 'required'
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('Gorontalo/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('gorontalos')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Gorontalo');
      }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$gorontalo = Jambi::find($id);
		$gorontalo->delete();
		return Redirect::to("Gorontalo");
	}


}
