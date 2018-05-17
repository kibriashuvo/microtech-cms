<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Hash;
use Auth;


class PwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
 
public function changePasswordView()
{
    //
    return view('dashboard.changepw');

}

public function changePassword(Request $request)
{
    //
$this->validate($request, [
        'current_password' => 'required',
        'password'=> 'required|min:6|confirmed',
]);

$input = $request->all();
    
if (Hash::check($input['current_password'], Auth::user()->password )) {
$user = Auth::user();
// return $user;
$user['password'] = bcrypt($input['password']);
$user->save();

Session::flash('password_changed','New password is set.');
return redirect('/dashboard');
}else
{
Session::flash('password_unmatched','Incorrect current password!');
return redirect()->route('password.change')->withErrors(['wrong'=>'Re-enter correct currnet password']);
}


    // return $input;

}



}
