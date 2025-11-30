<?php

namespace App\Livewire\Inventario;

use Livewire\Component;
use Livewire\Attributes\Layout;
class Create extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.inventario.create');
    }
}
