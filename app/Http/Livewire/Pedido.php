<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pedido extends Component
{

    public $nombre, $celular, $correo, $descripcion;
    public $openModal = false;

    // protected $listeners = ['abrirModal' => 'activarModal'];

    protected $rules = [
        'nombre' => 'required',
        'celular' => 'required',
        'correo' => 'required',
        'descripcion' => 'required'
    ];

    public function render()
    {
        return view('livewire.pedido');
    }

    public function activarModal(){
        $this->openModal = true;
    }

    public function save(){
        
    }
}
