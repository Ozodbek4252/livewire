<?php

namespace App\Http\Controllers;

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
            ],
            [
                'name' => 'Basic Form',
                'link' => 'starter.basic-form'
            ],
            [
                'name' => 'Nesting',
                'link' => 'starter.nesting'
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

    public function basicForm()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.basic-form', compact('sidebars'));
    }

    public function createBasicForm()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.basic-form.create-basic-form', compact('sidebars'));
    }

    public function nesting()
    {
        $sidebars = $this->getSidebars();

        return view('pages.starter.nesting', compact('sidebars'));
    }
}
