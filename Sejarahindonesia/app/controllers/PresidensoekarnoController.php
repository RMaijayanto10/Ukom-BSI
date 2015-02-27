<?php

class PresidensoekarnoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{          
	       $presiden1 = Presiden1::All();
			return View::make("Presidensoekarno.index")->with("data", $presiden1);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Presidensoekarno.index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$rules = array(
        'bio' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $presiden1 = new Presiden1;

		$presiden1->bio = Input::get('bio');


		$presiden1->save();

		return Redirect::to('Presidensoekarno');
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
		 $presiden1 = DB::table('presiden1s')->where('id',$id)->first();
      $presiden1 =
      ['presiden1sbyid' => $presiden1];
  return View::make('Presidensoekarno.edit', $presiden1);
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
            'bio' => 'required'
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('Presidensoekarno/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('presiden1s')
      ->where('id', $id)
      ->update(array(
                  'bio' => Input::get('bio')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Presidensoekarno');
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
		$presiden1 = Presiden1::find($id);
		$presiden1->delete();
		return Redirect::to("Presidensoekarno");
	}


}
