<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('old-welcome', [
            'title' => $request -> query('title', 'Valor default')
        ]);
    }
}
