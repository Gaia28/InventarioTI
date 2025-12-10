<?php

namespace App\Livewire\Usuarios;

use App\Models\UnidadeOrganizacional;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    #[Layout('layouts.app')]

    public $name = '';
    public $email = '';
    public $setor_id;
    public $departamento_id;
    public $setores = [];
    public $departamentos = [];
    public $sendReset = true;

    // props para mensagens (nova abordagem)
    public $statusMessage = null;
    public $statusType = null; // 'success' ou 'error'

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'sendReset' => 'boolean',
    ];

    public function mount()
    {
        $this->sendReset = true;
        $this->setores = UnidadeOrganizacional::where('tipo', 'setor')->orderBy('nome')->get();
        $this->departamentos = UnidadeOrganizacional::where('tipo', 'departamento')->orderBy('nome')->get();
    }

    public function save()
    {
        $this->validate();

        $randomPassword = Str::random(16);

        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'setor_id' => $this->setor_id,
                'departamento_id' => $this->departamento_id,
                'password' => Hash::make($randomPassword),
            ]);
        } catch (\Exception $e) {
            Log::error('Erro ao criar usuário', ['error' => $e->getMessage()]);
            $this->statusType = 'error';
            $this->statusMessage = 'Erro ao criar usuário. Verifique o log.';
            return;
        }

        if ($this->sendReset) {
            $status = Password::sendResetLink(['email' => $user->email]);

            if ($status === Password::RESET_LINK_SENT) {
                $this->statusType = 'success';
                $this->statusMessage = "Usuário criado. Link de redefinição enviado para {$user->email}.";
            } else {
                Log::warning('Falha ao enviar link de reset', ['email' => $user->email, 'status' => $status]);
                $this->statusType = 'error';
                $this->statusMessage = "Usuário criado, mas falha ao enviar link para {$user->email}.";
            }
        } else {
            $this->statusType = 'success';
            $this->statusMessage = 'Usuário criado com sucesso.';
        }

        // limpa o formulário (mas mantém sendReset true)
        $this->reset(['name', 'email', 'setor_id', 'departamento_id']);
        $this->sendReset = true;
    }

    public function render()
    {
        return view('livewire.usuarios.create');
    }
}
