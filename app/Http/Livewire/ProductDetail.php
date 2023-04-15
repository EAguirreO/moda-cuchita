<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class ProductDetail extends Component
{
    // public $identif;
    public $producto;
    public $categorias = [];
    public $nombreProducto='', $imagenProducto='', $nombre='', $celular='', $correo='', $descripcion='';

    protected $listeners = ['cambiarImagen', 'forcedCloseModal'];

    protected $rules = [
        'nombre' => 'required',
        'celular' => 'required',
        'correo' => 'required',
        'descripcion' => 'required'
    ];

    public function mount($identif){
        // $this->identif = $identif;
        $this->categorias = Category::where('estado', 'Activo')->get();
        $this->producto = Product::find($identif);
    }

    public function render()
    {
        return view('livewire.product-detail');
    }

    public function store($product_id, $product_name, $product_price){
        // Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        // session()->flash('success_message', 'Product agregado al carrito');
        // return redirect()->route('client.cart');
    }

    public function elegirProducto($idproducto){
        $prod = Product::where('id', $idproducto)->get()[0];
        $this->nombreProducto = $prod->nombre;
        $this->imagenProducto = $prod->imagen;
        // dd($this->nombreProducto);
    }

    public function limpiarCamposModal(){
        $this->nombreProducto='';
        $this->imagenProducto='';
        $this->nombre = '';
        $this->celular = '';
        $this->correo = '';
        $this->descripcion = '';
    }

    public function forcedCloseModal(){
        $this->limpiarCamposModal();
        
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function redireccionarVistaProductoDetalle($variable_id){
        // dd($variable_id);
        return redirect()->route('client.product.detail', [$variable_id]);
    }

    public function redireccionarVistaCatalogo(){
        return redirect()->route('client.catalog');
    }

    public function enviar(){
        $this->validate();
        $this->sendPedido();
        $this->dispatchBrowserEvent('closeModal');
        $this->limpiarCamposModal();
        // dd('Bien!');
    }

    public function sendPedido(){
        // try {
        //     $datos = [
        //         "nombreProducto" =>$this->nombreProducto,
        //         "imagenProducto" =>$this->imagenProducto,
        //         "nombre" => $this->nombre,
        //         "celular" => $this->celular,
        //         "correo" => $this->correo,
        //         "descripcion" => $this->descripcion
        //     ];
        //     Mail::to('correo@gmail.com')
        //     ->send(new Pedido($datos));
        //     $this->emit('envioExitoso');
        // } catch (Exception $e) {
        //     $this->emit('envioFallido');
        // }
        
    }

    public function cambiarImagen($dato){
        // dd($direccion);
        $this->url_imagen = $dato;
        // $this->emit('render');
    }
}
