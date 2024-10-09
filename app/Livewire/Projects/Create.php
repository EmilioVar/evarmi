<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title = '';

    #[Validate('required|min:3')]
    public $description = '';

    #[Validate('required|min:3')]
    public $url = '';

    #[Validate('required|image')]
    public $image = '';

    public function render()
    {
        return view('livewire.projects.create');
    }

    public function createProject() {
        $this->validate();

        $icono = $this->image->store('iconos', 'public');

        Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'image' => $icono
        ]);
    }
}
