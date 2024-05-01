<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpineController extends Controller
{
    public function index()
    {
        $sidebars = [
            [
                'name' => 'Essentials',
                'link' => 'alpine.index'
            ],
            [
                'name' => 'Directives',
                'link' => 'alpine.index'
            ],
        ];

        return view('pages.alpine.index', compact('sidebars'));
    }
}
