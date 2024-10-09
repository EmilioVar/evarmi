<?php

namespace App\Livewire\Projects;

use Livewire\Component;

class Card extends Component
{
    public $project;

    public function render()
    {
        return view('livewire.projects.card');
    }
}
