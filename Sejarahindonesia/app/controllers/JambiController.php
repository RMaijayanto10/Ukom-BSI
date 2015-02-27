<?php

class JambiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jambi = Jambi::All();
		return View::make("Jambi.index")->with("data", $jambi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Jambi.index');
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
        $jambi = new Jambi;

		$jambi->teks = Input::get('teks');


		$jambi->save();

		return Redirect::to('Jambi');
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
			 $jambi = DB::table('jambis')->where('id',$id)->first();
      $jambi =
      ['jambisbyid' => $jambi];
  return View::make('Jambi.edit', $jambi);
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
            return Redirect::to('Jambi/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('jambis')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Jambi');
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
		$jambi = Jambi::find($id);
		$jambi->delete();
		return Redirect::to("Jambi");
	}


}
