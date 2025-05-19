<?php
namespace App\Http\Controllers;
use App\Models\User;


use Hash;

class UserController extends Controller
{
    public function user_list()
    {
        // return "Show All User !!";
        // return view('hello');
        // return view('user-list');

        // ****** insert data ****** //
        /* for ($i = 0; $i < 10; $i++) 
        {
            $data['name'] = 'Mostafizur '.$i;
            $data['email'] = 'mostafizur'.$i.'@gmail.com';
            $data['password'] = Hash::make('12345678');
            User::create($data);
        } */

        // ****** show data ****** //
        // $users = User::all();
        // echo "<pre>";
        // print_r($users);
        // dd($users);

        $users = User::all();
        return view('user-list', compact('users'));
        
    }
    
    
}