<?php

namespace App\Livewire;

use App\Models\Judokas;
use Livewire\Component;

class ClubPage extends Component
{
    public function render()
    {

        $judokas = Judokas::all()->count();
        return view('livewire.club-page', [
            'judokas' => $judokas
        ]);
    }
}
