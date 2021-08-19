<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function reg(Request $request)
    {
        $user=new user();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->password = $request->password;
        $user->save();
        return redirect('contact');
    }
}
