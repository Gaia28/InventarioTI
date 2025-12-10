<?php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public string $search = '';

    public function getComputadoresProperty(){
        return Computador::query(
        )->where('nome_maquina', 'like', '%'.$this->search.'%')
         ->orWhere('tombamento', 'like', '%'.$this->search.'%')
         ->orWhere('ip', 'like', '%'.$this->search.'%')

         ->get();
        
    }
    #[Computed()]
    
    public function render()
    {
        return view('livewire.inventario.index',[
            'computadores' => $this->computadores,
        ]);
    }
}
