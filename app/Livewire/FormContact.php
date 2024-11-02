<?php

namespace App\Livewire;

use App\Mail\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class FormContact extends Component
{
    public $email;
    public $message;

    public function sendEmail() {
        Mail::to('emiliovm@outlook.es')->send(new Contact($this->email, $this->message));
    }
    public function render()
    {
        return view('livewire.form-contact');
    }
}
