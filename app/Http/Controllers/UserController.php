<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use Storage;


class UserController extends Controller
{
    public function uploadAvatar(Request $request)
      {
          if($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message','Avatar został wgrany.'); // Udany update
          }
            return redirect()->back()->with('error','Avatar nie został wgrany.'); // Błędny update
      }


      public function index()
      {


        // $data = [
        //   'name' => 'Tomek',
        //   'email' => 'tomek@gmail.com',
        //   'password' => 'password',
        // ];
        // // User::create($data);
        
        // $user = User::all();
        // return $user;

        // $user           = new User();
        // $user->name     = 'Piotrek';
        // $user->email    = 'piotr@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        // $user = User::all();
        // return $user;

        // User::where('id',6)->delete();

        // User::where('id',7)->Update(['name' => 'Piotreeek']);

         // DB::insert('insert into users (name,email,password)
         // values (?,?,?)',[
         //   'piotr','piotr@gmail.com','password',
         // ]);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 3',['piotr']);

        // DB::delete('delete from users');
        //
        // $users = DB::select('select * from users');
        // return $users;


        return view('home');
      }
}
