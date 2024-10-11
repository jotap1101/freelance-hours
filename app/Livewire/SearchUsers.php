<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
