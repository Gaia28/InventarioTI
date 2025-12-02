<?php

namespace App\Livewire\Inventario;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    #[Computed()]
    public function computadores()
    {
        return \App\Models\Computador::all();
    }
    public function render()
    {
        return view('livewire.inventario.index');
    }
}
