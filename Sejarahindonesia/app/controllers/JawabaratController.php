<?php

class JawabaratController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jawabarat = Jawabarat::All();
		return View::make("Jawabarat.index")->with("data", $jawabarat);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Jawabarat.index');
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
        $jawabarat = new Jawabarat;

		$jawabarat->teks = Input::get('teks');


		$jambi->save();

		return Redirect::to('Jawabarat');
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
		$jawabarat = DB::table('jawabarats')->where('id',$id)->first();
      $jawabarat =
      ['jawabaratsbyid' => $jawabarat];
  return View::make('Jawabarat.edit', $jawabarat);
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
            return Redirect::to('Jawabarat/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('jawabarats')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Jawabarat');
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
		$jawabarat = Jawabarat::find($id);
		$jawabarat->delete();
		return Redirect::to("Jawabarat");
	}


}
