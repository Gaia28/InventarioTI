<?php

namespace App\Livewire\Usuarios;

use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    public string $search = '';

    public function getUsuariosProperty()
    {
        return User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy('name')
            ->get();
    }
    public function render()
    {
        return view('livewire.usuarios.index', [
            'usuarios' => $this->usuarios,
        ]);
    }
}
