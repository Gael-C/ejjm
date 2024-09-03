<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;

class ArticlePage extends Component
{

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }


    public function render()
    {
        return view('livewire.article-page',[
            'article' => Articles::where('slug',$this->slug)->firstOrFail()
        ]);
    }
}
