<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function index()
    {
        $sidebars = [
            [
                'name' => 'Properties',
                'link' => 'starter.index'
            ],
            [
                'name' => 'Users',
                'link' => 'starter.index'
            ],
        ];
        
        return view('pages.starter.index', compact('sidebars'));
    }
}
