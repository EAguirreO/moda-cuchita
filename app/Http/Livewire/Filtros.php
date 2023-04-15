<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Filtros extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $categoria;
    public $selectedCategory = null;
    protected $queryString = ['categoria' => ['except' => ''], 'page'];

    public function mount(){
        if($this->categoria != null){
            $aux = Category::where('slug', $this->categoria)->get();
            if(count($aux) > 0){
                $this->selectedCategory = $aux[0]->id;
            }
        }
    }

    public function render()
    {
        $productos = [];

        if($this->selectedCategory != ''){
            $productos = Product::where([['categoria', $this->selectedCategory], ['estado', 1]])->paginate(12);
        }else{
            $productos = Product::where('estado', 1)->paginate(12);
        }
        
        return view('livewire.filtros', [
            'categorias' => Category::where('estado', 'Activo')->get(),
            'productos' => $productos
        ]);
    }

    public function updatedselectedCategory($category_id){
        if($category_id != ''){
            $this->categoria = Category::find($category_id)->slug;
        } else {
            $this->categoria = '';
        }
    }

    public function elegirProducto($idproducto){
        $this->emitTo('modal-pedido','elegirProducto', $idproducto);
    }

    public function redireccionarVistaProductoDetalle($variable_id){
        return redirect()->route('client.productDetail', [$variable_id]);
    }

    public function setValueCategory($id){
        if($id!= ''){
            $this->categoria = Category::find($id)->slug;
            $this->selectedCategory = $id;
            //$this->resetPage();
        } else {
            $this->categoria = '';
        }
    }
}
