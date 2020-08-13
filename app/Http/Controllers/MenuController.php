<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
    	return view('welcome', ['menu' => $menu]);
    }
}
