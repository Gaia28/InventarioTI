<?php

namespace App\Livewire\Usuarios;

use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function getUsuariosProperty()
    {
        return User::with(['setor', 'departamento'])
            ->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy('name')->paginate(5);
    }
    public function render()
    {
        return view('livewire.usuarios.index', [
            'usuarios' => $this->usuarios,
        ]);
    }
}
