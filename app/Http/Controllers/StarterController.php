<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
    private function getSidebars()
    {
        return [
            [
                'name' => 'Properties',
                'link' => 'starter.index'
            ],
            [
                'name' => 'Lifecycle',
                'link' => 'starter.lifecycle'
            ],
            [
                'name' => 'Basic Table',
                'link' => 'starter.basic-table'
            ]
        ];
    }

    public function index()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.index', compact('sidebars'));
    }

    public function lifecycle()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.lifecycle', compact('sidebars'));
    }

    public function basicTable()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.basic-table', compact('sidebars'));
    }
}
