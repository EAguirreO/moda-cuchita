<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'stock' => 'required|integer',
        'precio' => 'required',
        'imagen1' => 'image|nullable',
        'imagen2' => 'image|nullable',
        'imagen3' => 'image|nullable',
        'imagen4' => 'image|nullable',
        'categoria'=>'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('nombre', 'id');
        $type = 'create';
        return view('admin.products.create', compact('categories', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = $this->rules;
        $reglas['imagen'] = 'required|image';
        $request->validate($reglas);
        
        $product=new Product();
        $product->nombre = $request->nombre;
        $product->nombre_en = $request->nombre_en;
        $product->descripcion = $request->descripcion;
        $product->descripcion_en = $request->descripcion_en;
        $product->stock = $request->stock;
        $product->precio = $request->precio;
        $product->estado = 1;
        $product->categoria = $request->categoria;

        //IMAGEN PRINCIPAL
        $product->imagen = $this->saveImagen($request->imagen);

        //IMAGEN 1
        if(!is_null($request->imagen1)){
            $product->imagen1 = $this->saveImagen($request->imagen1);
        }

        //IMAGEN 2
        if(!is_null($request->imagen2)){
            $product->imagen2 = $this->saveImagen($request->imagen2);
        }

        //IMAGEN 3
        if(!is_null($request->imagen3)){
            $product->imagen3 = $this->saveImagen($request->imagen3);
        }

        //IMAGEN 4
        if(!is_null($request->imagen4)){
            $product->imagen4 = $this->saveImagen($request->imagen4);
        }

        $product->save();

        //return redirect()->route('products.edit', $product);
        return redirect()->route('products.index')->with('msgSuccess', 'Producto registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('nombre', 'id');
        $type = 'edit';
        return view('admin.products.edit', compact('product', 'categories', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $reglas = $this->rules;
        $reglas['imagen'] = 'image|nullable';
        $request->validate($reglas);
        
        $product->nombre = $request->nombre;
        $product->nombre_en = $request->nombre_en;
        $product->descripcion = $request->descripcion;
        $product->descripcion_en = $request->descripcion_en;
        $product->stock = $request->stock;
        $product->precio = $request->precio;
        $product->estado = $request->estado;
        $product->categoria = $request->categoria;

        //IMAGEN PRINCIPAL
        if(!is_null($request->imagen)){
            if(!is_null($product->imagen)){
                $this->deleteImagen($product->imagen);
            }
            $product->imagen = $this->saveImagen($request->imagen);
        }

        //IMAGEN 1
        if(!is_null($request->imagen1)){
            if(!is_null($product->imagen1)){
                $this->deleteImagen($product->imagen1);
            }
            $product->imagen1 = $this->saveImagen($request->imagen1);
        }

        //IMAGEN 2
        if(!is_null($request->imagen2)){
            if(!is_null($product->imagen2)){
                $this->deleteImagen($product->imagen2);
            }
            $product->imagen2 = $this->saveImagen($request->imagen2);
        }

        //IMAGEN 3
        if(!is_null($request->imagen3)){
            if(!is_null($product->imagen3)){
                $this->deleteImagen($product->imagen3);
            }
            $product->imagen3 = $this->saveImagen($request->imagen3);
        }

        //IMAGEN 4
        if(!is_null($request->imagen4)){
            if(!is_null($product->imagen4)){
                $this->deleteImagen($product->imagen4);
            }
            $product->imagen4 = $this->saveImagen($request->imagen4);
        }

        $product->save();

        //return redirect()->route('products.edit', $product);
        return redirect()->route('products.index')->with('msgSuccess', 'Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    private function saveImagen($imagen){
        $nombre = date('Ymdhis') .rand(). '.' . $imagen->extension();
        $ruta = storage_path().'/app/public/imagenes/' . $nombre;
        $productImg = 'storage/imagenes/' . $nombre;

        $img = Image::make($imagen);
        $width = $img->width();
        
        if($width>500 || $width<100){
            $img->resize(500, null, function($constraint){$constraint->aspectRatio();})->save($ruta);
        } else{
            $img->save($ruta);
        }

        return $productImg;
    }

    private function deleteImagen($imagen){
        $url = str_replace('storage', 'public', $imagen);
        Storage::delete($url);
    }
}
