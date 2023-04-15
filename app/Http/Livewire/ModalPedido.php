<?php

namespace App\Http\Livewire;

use App\Mail\Pedido;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ModalPedido extends Component
{

    public $nombreProducto='', $imagenProducto='', $nombre='', $celular='', $correo='', $descripcion='';

    protected $listeners = ['elegirProducto', 'forcedCloseModal'];

    protected $rules = [
        'nombre' => 'required',
        'celular' => 'required',
        'correo' => 'required',
        'descripcion' => 'required'
    ];

    public function elegirProducto($idProducto){
        $prod = Product::where('id', $idProducto)->get()[0];
        $this->nombreProducto = $prod->nombre;
        $this->imagenProducto = $prod->imagen;
    }

    public function render()
    {
        return view('livewire.modal-pedido');
    }

    public function limpiarCamposModal(){
        Log::info('FUNCION LIMPIAR CAMPOS');
        $this->nombreProducto='';
        $this->imagenProducto='';
        $this->nombre = '';
        $this->celular = '';
        $this->correo = '';
        $this->descripcion = '';
    }

    public function forcedCloseModal(){
        Log::info('FUNCION FORCED CLOSE MODAL');
        $this->limpiarCamposModal();

        // $this->resetErrorBag();
        $this->resetValidation();
    }

    public function enviar(){
        Log::info('FUNCION ENVIAR');
        $this->validate();
        $this->sendPedido();
        $this->dispatchBrowserEvent('closeModal');
        $this->limpiarCamposModal();
        // dd('Bien!');
    }

    public function sendPedido(){
        try {
            $datos = [
                "nombreProducto" =>$this->nombreProducto,
                "imagenProducto" =>$this->imagenProducto,
                "nombre" => $this->nombre,
                "celular" => $this->celular,
                "correo" => $this->correo,
                "descripcion" => $this->descripcion
            ];
            Mail::to('correo@gmail.com')
            ->send(new Pedido($datos));
            $this->emit('envioExitoso');
        } catch (Exception $e) {
            $this->emit('envioFallido');
        }
        
    }
}
