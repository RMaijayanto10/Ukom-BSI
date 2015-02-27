<?php

class SumaterabaratController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sumbar = Sumbar::All();
		return View::make("Sumaterabarat.index")->with("data", $sumbar);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Sumaterabarat.index');
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
        $sumbar = new Sumbar;

		$sumbar->teks = Input::get('teks');


		$sumbar->save();

		return Redirect::to('Sumaterabarat');
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
		 $sumbar = DB::table('sumbars')->where('id',$id)->first();
      $sumbar =
      ['sumbarsbyid' => $sumbar];
  return View::make('Sumaterabarat.edit', $sumbar);
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
            return Redirect::to('Sumaterabarat/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('sumbars')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Sumaterabarat');
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
		$sumbar = Sumbar::find($id);
		$sumbar->delete();
		return Redirect::to("Sumaterabarat");
	}


}
