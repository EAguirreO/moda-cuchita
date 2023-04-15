<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;

class AdminCreateSubcategory extends Component
{
    public $open = false;

    public $nombre, $nombre_en, $cat, $orden, $categorias;

    protected $rules = [
        'nombre' => 'required',
        'nombre_en' => 'required',
        'orden' => 'required',
        'cat' => 'required'
    ];

    public function mount(){
        $this->categorias = Category::all();
    }

    public function save(){
        
        $this->validate();

        Subcategory::create([
            'nombre' => $this->nombre,
            'nombre_en' => $this->nombre,
            'orden' => $this->orden,
            'categoria' => $this->cat,
            'estado' => 'Activo',
            'slug' => Str::slug($this->nombre, '-')
        ]);

        $this->reset(['open','nombre','nombre_en','orden','cat']);

        $this->emitTo('admin-subcategories','render');
        $this->emit('alert', 'Subcategoría creada exitosamente');
        
    }

    public function render()
    {
        return view('livewire.admin-create-subcategory');
    }
}
