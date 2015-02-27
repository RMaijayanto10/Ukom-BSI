<?php

class JawatimurController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jawatimur = Jawatimur::All();
		return View::make("Jawatimur.index")->with("data", $jawatimur);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Jawatimur.index');
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
        $jawatimur = new Aceh;

		$jawatimur->teks = Input::get('teks');


		$jawatimur->save();

		return Redirect::to('Jawatimur');
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
		 $jawatimur = DB::table('jawatimurs')->where('id',$id)->first();
      $jawatimur =
      ['jawatimursbyid' => $jawatimur];
  return View::make('Jawatimur.edit', $jawatimur);
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
            return Redirect::to('Jawatimur/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('jawatimurs')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Jawatimur');
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
		$jawatimur = Jawatimur::find($id);
		$jawatimur->delete();
		return Redirect::to("Jawatimur");
	}


}
