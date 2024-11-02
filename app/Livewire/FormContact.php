<?php

namespace App\Livewire;

use App\Mail\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class FormContact extends Component
{
    public $email;
    public $message;
    public $emailSended = false;

    public function sendEmail() {
        Mail::to('emiliovm@outlook.es')->send(new Contact($this->email, $this->message));

        $this->email = '';
        $this->message = '';
        $this->emailSended = true;
    }
    public function render()
    {
        return view('livewire.form-contact');
    }
}
