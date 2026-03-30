<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('index');
    }


    public function dashboard(): View
    {
        $habits = auth()->user()->habits;
        return view('dashboard', compact('habits'));
    }
}
