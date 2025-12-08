<?php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\Attributes\Layout;
class Create extends Component
{
    #[Layout('layouts.app')]

    public $monitores = [];
    public $tombamento;
    public $ip;
    public $nome_maquina;
    public $usuario_id;
    public $creatingUsuario = false;
    public $novo_usuario_nome;
    public $novo_usuario_setor;
    public $novo_usuario_departamento;
    
    public $processador;
    public $placa_mae;
    public $tamanho_disco;
    public $memoria_ram;
    public $tipo_memoria;
    public $sistema_operacional;
    public $licenca_so;
    public $teclado;
    public $mouse;
    public $estabilizador;
    public $carrinho;
    public $observacoes;
    


     public function mount()
    {
        $this->monitores = [
            [
                'tombamento' => '', 
                'marca' => '',
                'tamanho_tela' => '', 
                'tipo_conexao' => '',
            ]
        ];
    }

      public function addMonitor(){
            $this->monitores[] = [
                'tombamento' => '', 
                'marca' => '',
                'tamanho_tela' => '',
                'tipo_conexao' => '',
            ];
        }

        public function removeMonitor($index)
    {
        unset($this->monitores[$index]);
        $this->monitores = array_values($this->monitores); 
    }

    public function save(){
        $rules = [
            'tombamento' => 'required|unique:computadores,tombamento',
        ];

        if ($this->creatingUsuario) {
            $rules['novo_usuario_nome'] = 'required|string|max:255';
            $rules['novo_usuario_setor'] = 'required|string|max:255';
            $rules['novo_usuario_departamento'] = 'required|string|max:255';
        } else {
            $rules['usuario_id'] = 'required|exists:usuarios,id';
        }

        $this->validate($rules);

        if ($this->creatingUsuario) {
            $usuario = Usuario::create([
                'nome' => $this->novo_usuario_nome,
                'setor' => $this->novo_usuario_setor,
                'departamento' => $this->novo_usuario_departamento,
            ]);
            $this->usuario_id = $usuario->id;
        }

        $usuario = $this->usuario_id ? Usuario::find($this->usuario_id) : null;

        $computador = Computador::create([
                'tombamento' => $this->tombamento,
                'ip' => $this->ip,
                'nome_maquina' => $this->nome_maquina,
                'operador' => $usuario ? $usuario->nome : null,
                'usuario_id' => $this->usuario_id,
                'processador' => $this->processador,
                'placa_mae' => $this->placa_mae,
                'tamanho_disco' => $this->tamanho_disco,
                'memoria_ram' => $this->memoria_ram,
                'tipo_memoria' => $this->tipo_memoria,
                'sistema_operacional' => $this->sistema_operacional,
                'licenca_so' => $this->licenca_so,
                'teclado' => $this->teclado,
                'mouse' => $this->mouse,
                'estabilizador' => $this->estabilizador,
                'carrinho' => $this->carrinho,
                'observacoes' => $this->observacoes,
            ]);
             $monitorsToCreate = collect($this->monitores)->map(function ($monitor) {
                return [
                    'tombamento' => $monitor['tombamento'],
                    'marca' => $monitor['marca'],
                    'tamanho_tela' => $monitor['tamanho_tela'],
                    'tipo_conexao' => $monitor['tipo_conexao'],
                ];
            })->all();
            
            $computador->monitores()->createMany($monitorsToCreate); 

    }
    public function render()
    {
        return view('livewire.inventario.create', [
            'usuarios' => Usuario::orderBy('nome')->get(),
        ]);
    }
}
