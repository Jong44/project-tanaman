<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tanaman;

class AdminController extends Controller
{
    public function index()
    {
        $tanaman = Tanaman::all();
        return view('admin.index', compact('tanaman'));
    }
}
