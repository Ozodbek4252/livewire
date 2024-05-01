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
                'name' => 'Lifecycle',
                'link' => 'starter.lifecycle'
            ],
        ];

        return view('pages.starter.index', compact('sidebars'));
    }

    public function lifecycle()
    {
        $sidebars = [
            [
                'name' => 'Properties',
                'link' => 'starter.index'
            ],
            [
                'name' => 'Lifecycle',
                'link' => 'starter.lifecycle'
            ],
        ];

        return view('pages.starter.lifecycle', compact('sidebars'));
    }
}
