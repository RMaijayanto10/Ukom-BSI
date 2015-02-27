<?php

class SumateraselatanController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sumsel = Sumsel::All();
		return View::make("Sumateraselatan.index")->with("data", $sumsel);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Sumateraselatan.index');
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
        $sumsel = new Sumsel;

		$sumsel->teks = Input::get('teks');


		$sumsel->save();

		return Redirect::to('Sumateraselatan');
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
			 $sumsel = DB::table('sumsels')->where('id',$id)->first();
      $sumsel =
      ['sumselsbyid' => $sumsel];
  return View::make('Sumateraselatan.edit', $sumsel);
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
            return Redirect::to('Sumateraselatan/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('sumsels')
      ->where('id', $id)
      ->update(array(
                  'teks' => Input::get('teks')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Sumateraselatan');
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
		$sumsel = Sumsel::find($id);
		$sumsel->delete();
		return Redirect::to("Sumateraselatan");
	}


}
