<?php

namespace App\Livewire\Alpine;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Introduction')]
class Introduction extends Component
{
    public $title1, $title2, $title3, $title4, $title5, $title6 = '';
    public $content1, $content2, $content3, $content4, $content5, $content6 = '';

    public function render()
    {
        return view('livewire.apline.introduction');
    }
}
