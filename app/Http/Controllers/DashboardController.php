<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $hello = 'hello world!';
        return Inertia::render('Dashboard', ['hello' => $hello]);
    }
}
