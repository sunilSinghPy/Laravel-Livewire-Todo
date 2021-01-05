<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $data = [
            'name' => 'nishu singh',
            'email' => 'nishu@sunilsingh.me',
            'password' => 'hehehehehe'
        ];
        // User::create($data);
        // $user = new User();
        // $user->name = "sunil singh";
        // $user->email = "coolsunilsingh@gmail.com";
        // $user->password = bcrypt("sunilsingh");
        // $user->save();
        // User::where('id',5)->update(['name'=>'sunillllllllll']);

        $user = User::all();
        // $user = User::where('id',5)->delete();
        // dd($user);
        return $user;
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            if (Auth()->user()->avatar) {
                Storage::delete("public/images/" . Auth()->user()->avatar);
            }
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images', $filename, 'public');
            User::find(Auth::user()->id)->update(['avatar' => $filename]);

            return redirect()->back()->with('msg', 'Avatar Uploaded Successfully');
        }

        // session()->flash('error','Somthing went wrong. Please try in a bit.');
        return redirect()->back()->with('error', 'no file to upload');
    }
}
