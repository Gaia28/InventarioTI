<?php

namespace App\Livewire\Inventario;

use App\Models\Computador;
use Livewire\Component;
use App\Models\Monitor;
use Livewire\Attributes\Layout;

class Edit extends Component
{
    #[Layout('layouts.app')]

    public Computador $computador;
     public $monitores = [];
    public $tombamento;
    public $ip;
    public $nome_maquina;
    public $nome_usuario;
    
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
    public $monitortes = [];
    
    public function mount()
    {
        $this->tombamento = $this->computador->tombamento;
        $this->ip = $this->computador->ip;
        $this->nome_maquina = $this->computador->nome_maquina;
        $this->nome_usuario = $this->computador->operador;
        $this->processador = $this->computador->processador;
        $this->placa_mae = $this->computador->placa_mae;
        $this->tamanho_disco = $this->computador->tamanho_disco;
        $this->memoria_ram = $this->computador->memoria_ram;
        $this->tipo_memoria = $this->computador->tipo_memoria;
        $this->sistema_operacional = $this->computador->sistema_operacional;
        $this->licenca_so = $this->computador->licenca_so;
        $this->teclado = $this->computador->teclado;
        $this->mouse = $this->computador->mouse;
        $this->estabilizador = $this->computador->estabilizador;
        $this->carrinho = $this->computador->carrinho;
        $this->observacoes = $this->computador->observacoes;

        $this->monitores = $this->computador->monitores->toArray();
    }

    public function addMonitor()
    {
        $this->monitores[] = [
            'id' => null, 
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

    public function update()
    {
        $this->computador->update([
            'tombamento' => $this->tombamento,
            'ip' => $this->ip,
            'nome_maquina' => $this->nome_maquina,
            'operador' => $this->nome_usuario,
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

        foreach ($this->monitores as $monitorData) {
            
            $dataToSave = [
                'tombamento' => $monitorData['tombamento'],
                'marca' => $monitorData['marca'],
                'tamanho_tela' => $monitorData['tamanho_tela'],
                'tipo_conexao' => $monitorData['tipo_conexao'],
            ];

            if (isset($monitorData['id']) && $monitorData['id']) {
                Monitor::where('id', $monitorData['id'])->update($dataToSave);
            } else {
                $this->computador->monitores()->create($dataToSave);
            }
        }

        session()->flash('success', 'O computador ' . $this->tombamento . ' foi atualizado com sucesso!');
        return $this->redirect(route('inventario.show', $this->computador), navigate: true);
    }
    public function render()
    {
        return view('livewire.inventario.edit');
    }
}
