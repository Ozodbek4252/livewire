<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpineController extends Controller
{
    private function getSidebars()
    {
        return [
            [
                'name' => 'Introduction',
                'link' => 'alpine.index'
            ],
            // [
            //     'name' => 'Installation',
            //     'link' => 'alpine.index'
            // ],
            // [
            //     'name' => 'Data Binding',
            //     'link' => 'alpine.index'
            // ],
            // [
            //     'name' => 'Events',
            //     'link' => 'alpine.index'
            // ],
            // [
            //     'name' => 'Modifiers',
            //     'link' => 'alpine.index'
            // ],
            // [
            //     'name' => 'Essentials',
            //     'link' => 'alpine.index'
            // ],
            // [
            //     'name' => 'Directives',
            //     'link' => 'alpine.index'
            // ],
        ];
    }

    public function index()
    {
        $sidebars = $this->getSidebars();

        return view('pages.alpine.index', compact('sidebars'));
    }
}
