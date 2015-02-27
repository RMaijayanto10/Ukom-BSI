<?php

class JawatengahController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jawatengah = Jawatengah::All();
		return View::make("Jawatengah.index")->with("data", $jawatengah);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Jawatengah.index');
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
        $jawatengah = new Jawatengah;

		$jawatengah->teks = Input::get('teks');


		$jambi->save();

		return Redirect::to('Jawatengah');
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
		$jawatengah = DB::table('jawatengahs')->where('id',$id)->first();
      $jawatengah =
      ['jawatengahsbyid' => $jawatengah];
  return View::make('Jawatengah.edit', $jawatengah);
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
            return Redirect::to('Jawatengah/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('jawatengahs')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Jawatengah');
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
		$jawatengah = Jawatengah::find($id);
		$jawatengah->delete();
		return Redirect::to("Jawatengah");
	}


}
