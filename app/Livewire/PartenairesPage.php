<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partenaires;

class PartenairesPage extends Component
{
    public function render()
    {
        $partenaires = Partenaires::query()->orderBy('don', 'desc')->get();

        return view('livewire.partenaires-page',[ 
            'partenaires' => $partenaires
        ]);
    }
}
