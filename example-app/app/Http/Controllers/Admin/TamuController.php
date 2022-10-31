<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){
        $data = User::all();

        return view('admin.tamu.index', compact('data'));
    }
}
