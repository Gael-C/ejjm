<?php

namespace App\Livewire;

use App\Models\Bureau;
use Livewire\Component;

class BureauPage extends Component
{
    public function render()
    {
        $bureau = Bureau::all();

        return view('livewire.bureau-page', [
            'bureau' => $bureau
        ]);
    }
}
