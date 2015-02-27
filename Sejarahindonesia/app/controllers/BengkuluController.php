<?php

class BengkuluController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bengkulu = Bengkulu::All();
		return View::make("Bengkulu.index")->with("data", $bengkulu);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Bengkulu.index');
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
        $bengkulu = new Bengkulu;

		$bengkulu->teks = Input::get('teks');


		$bengkulu->save();

		return Redirect::to('Bengkulu');
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
		$bengkulu = DB::table('bengkulus')->where('id',$id)->first();
      $bengkulu =
      ['bengkulusbyid' => $bengkulu];
  return View::make('Bengkulu.edit', $bengkulu);
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
            return Redirect::to('Bengkulu/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('bengkulus')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Banten');
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
		$bengkulu = Jakarta::find($id);
		$bengkulu->delete();
		return Redirect::to("Bengkulu");
	}


}
