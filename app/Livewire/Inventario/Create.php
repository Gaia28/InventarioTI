<?php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use Livewire\Component;
use Livewire\Attributes\Layout;
class Create extends Component
{
    #[Layout('layouts.app')]

    public $monitores = [];
    public $tombamento;
    public $ip;
    public $nome_usuario;
    public $setor;
    public $departamento;
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
        $computador = Computador::create([
                'tombamento' => $this->tombamento,
                'ip' => $this->ip,
                'operador' => $this->nome_usuario,
                'setor' => $this->setor,
                'departamento' => $this->departamento,
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
                    'tamanho_tela' => $monitor['tamanho_tela'], // Campo correto
                    'tipo_conexao' => $monitor['tipo_conexao'],
                ];
            })->all();
            
            // O createMany só funciona se o relacionamento "monitores()" estiver correto no model Computador
            $computador->monitores()->createMany($monitorsToCreate); 

    }
    public function render()
    {
        return view('livewire.inventario.create');
    }
}
