<?php

namespace App\Livewire;

use App\Events\FireConffeti;
use Livewire\Component;

class MoreConffeti extends Component
{
    public $userToken;

    public function MoreConffetiSend(string $userToken) {
        FireConffeti::dispatch($userToken);

        $this->skipRender();
    }

    public function render()
    {
        return view('livewire.more-conffeti');
    }
}
