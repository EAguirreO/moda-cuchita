<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;

class AdminSubcategories extends Component
{
    use WithPagination;

    public $subcategory;
    public $categorias, $cat, $auxcategoria;
    public $open_edit = false;

    protected $listeners = ['render' => 'render', 'delete'];

    public function mount(){
        $this->subcategory = new Subcategory();
        $this->categorias = Category::all();
        $this->auxcategoria = new Category();
    }

    protected $rules = [
        'subcategory.nombre' => 'required',
        'subcategory.nombre_en' => 'required',
        'subcategory.orden' => 'required',
        'subcategory.estado' => 'required'
    ];

    public function render()
    {
        $subcategorias = Subcategory::paginate(10);

        return view('livewire.admin-subcategories',[
            'subcategorias'=>$subcategorias,
        ]);
    }

    public function edit(Subcategory $subcategory){
        $this->subcategory = $subcategory;
        $this->cat = $subcategory->categoria;
        $this->open_edit = true;
    }

    public function update(){
        $this->validate();
        $this->subcategory->categoria=$this->cat;
        $this->subcategory->slug = Str::slug($this->subcategory->nombre, '-');
        $this->subcategory->save();

        $this->reset(['open_edit']);

        $this->emit('alert', 'Subcategoría actualizada exitosamente');
    }

    public function delete(Subcategory $subcategory){
        $subcategory->delete();
    }
}
