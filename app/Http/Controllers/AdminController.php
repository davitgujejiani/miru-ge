<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create() {
        if ($this->invalidAdmin()) 
        {
            return $this->invalidAdmin();
        }

        return view('admin.create');
        
    }


    public function dashboard() {
        if ($this->invalidAdmin()) 
        {
            return $this->invalidAdmin();
        }
        return view('admin.dashboard');
    }

    public function invalidAdmin() 
    {
        if (!Auth::check()) {return redirect('/login');}
        if (Auth::id() !== 1) {return redirect('/');}
        return null;
    }
}

