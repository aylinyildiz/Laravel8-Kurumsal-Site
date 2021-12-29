<?php

namespace App\Http\Livewire;

use App\Models\Content;

use App\Models\User;
use Livewire\Component;


class Search extends Component
{
    public $search = '';

    public function render()
    {
        $datalist = Content::where('title', 'like', '%' .$this->search. '%')->get();
        return view('livewire.search', ['datalist'=>$datalist, 'query'=>$this->search]);
    }
}
