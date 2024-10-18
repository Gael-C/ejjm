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

    public $alerteVisible = true;

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

        
        // Send email
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Contact($contact));

        return redirect()->route('contact')->with('mail envoyé', 'Votre message a bien été envoyé !');

    }

    public function close()
    {
        $this->alerteVisible = false;
    }
}
