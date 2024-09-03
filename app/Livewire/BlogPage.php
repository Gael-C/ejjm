<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;


class BlogPage extends Component
{
    public function render()
    {
        $articles = Articles::query()->orderBy('created_at','desc')->paginate(5);

        $latest = $articles->first();
        
        unset($articles[0]);


        return view('livewire.blog-page',[
            'articles' => $articles,
            'latest' => $latest
        ]);
    }
}
