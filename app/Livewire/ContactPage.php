<?php

namespace App\Livewire;

use App\Mail\Contact;
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
        $contact = [
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'message' => $this->message,
        ];

        $this->reset(["nom", "prenom", "email", "message"]);
        
        // Send email
        Mail::to('gaelcoupe17@gmail.com')->send(new Contact($contact));

        session()->flash('mail envoyé', 'Votre message a bien été envoyé !');

        $this->reset();
    }
}
