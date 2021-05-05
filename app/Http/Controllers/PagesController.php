<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Menu;


class PagesController extends Controller
{
    public function index(){
        $languages = Language::with('menus')
            ->orderBy('position', 'asc')
            ->get();

        return view('welcome', compact('languages'));

    }
}
