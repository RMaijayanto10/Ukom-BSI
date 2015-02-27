<?php

class RegistrationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   $admin = Admin::All();
		return View::make("Registration.index")->with("data", $admin);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	   return View::make('Registration.index');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    $rules = array(
        'email' => 'required',
        'password' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $admin = new Admin;

		$admin->email = Input::get('email');
		$admin->password = Input::get('password');


		$admin->save();

		return Redirect::to('Registration');
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
		 $admin = DB::table('admins')->where('id',$id)->first();
      $admin =
      ['adminsbyid' => $admin];
  return View::make('Registration.edit', $admin);
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
            'email' => 'required',
            'password' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('Registration/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('admins')
      ->where('id', $id)
      ->update(array(
                  'email' => Input::get('email'),
                  'password' => Input::get('password')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Registration');
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
		$admin = Admin::find($id);
		$admin->delete();
		return Redirect::to("Registration");
	}
    
    //public static function getSearch($search=null){
    
    //is_publish : 0 = pending, 1 = published

    //$result = DB::table('admins')
        //->where('admins.id','1')
        //->where(function($query) use ($search){

            //$query->where('admins.email','LIKE','%'.$search.'%')
                  //->orWhere('admins.password', 'LIKE','%'.$search.'%');
        //})
        //->select('SELECT * FROM `admins` WHERE `admins`.`id` = '1' AND (`admins`.`email` LIKE '%search%' OR `admins`.`password` LIKE '%search%')...')
        //->orderBy('admins.id', 'desc')->paginate(10);

    //return $result;
//}

}
