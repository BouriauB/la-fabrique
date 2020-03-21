<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index(){
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/');
        }else {
            $categories = Category::get();
            $contacts = Contact::get();
            return view('admin.dashboard', compact(['categories', 'contacts']));
        }
    }
}
