<?php

namespace App\Http\Controllers;

use App\Models\Example;

class ExampleController extends Controller
{
    public function index()
    {
        $examples = Example::all();
        return view('example', [
            'examples' => $examples
        ]);
    }
}
