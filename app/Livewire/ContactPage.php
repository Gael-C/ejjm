<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{

    public $nom = '';
    public $prenom = '';
    public $email = '';
    public $message = '';

    public function render()
    {
        return view('livewire.contact-page');
    }


    public function submitForm()
    {

        $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        
        // Send email
        // Mail::to(config('mail.from.address'))->send(new ContactFormMail($this->name, $this->email, $this->message));

        session()->flash('message', 'Votre message a bien été envoyé !');

        $this->reset();
    }
}
