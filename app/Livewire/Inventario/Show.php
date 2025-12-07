<?php
// app/Livewire/Computador/Show.php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.app')]
    /**
     * 
     * 
     * @var Computador
     */
    public Computador $computador;

    /**
     * 
     * * @param Computador 
     * @return void
     */
    public function mount(Computador $computador): void
    {
        $this->computador = $computador->load('monitores'); 
    }

    /**
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.inventario.show');
    }
}