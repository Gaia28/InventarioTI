<?php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
class Create extends Component
{
    #[Layout('layouts.app')]

    public $monitores = [];
    public $tombamento;
    public $ip;
    public $nome_maquina;
    public $lotacao;
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
            'ip' => 'required|unique:computadores,ip|max:15|min:7',
            'nome_maquina' => 'required|unique:computadores,nome_maquina|max:25|min:6',
            'lotacao' => 'required|max:100',
            'usuario_id' => 'nullable|exists:users,id',
            'processador' => 'required|max:100',
            'placa_mae' => 'nullable|max:100',
            'tamanho_disco' => 'required|max:50',
            'memoria_ram' => 'required|max:50',
            'tipo_memoria' => 'required|max:50',
            'sistema_operacional' => 'required|max:100',
            'licenca_so' => 'required|max:100',
            'teclado' => 'required|max:100',
            'mouse' => 'required|max:100',
            'estabilizador' => 'required|max:100',
            'carrinho' => 'nullable|max:100',
            'observacoes' => 'nullable|max:500',

        ];

        $this->validate($rules);

        $computador = Computador::create([
                'tombamento' => $this->tombamento,
                'ip' => $this->ip,
                'nome_maquina' => $this->nome_maquina,
                'lotacao' => $this->lotacao,
                'operador' => $this->usuario_id ?: '',
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
            'usuarios' => User::orderBy('name')->get(),
        ]);
    }
}
