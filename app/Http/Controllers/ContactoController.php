<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;

class ContactoController extends Controller
{
    protected $rules = [
        'nombres' => 'required|alpha',
        'email' => 'required|email:rfc',
        'telefono' => 'numeric'
    ];

    public function sendForm(Request $request){
        $request->validate($this->rules);
        $datos = [
            "nombres" => $request->nombres,
            "email" => $request->email,
            "telefono" => $request->telefono,
            "comentario" => $request->comentario
        ];
        Mail::to('eaguirre.hdc@gmail.com')
                //->cc('gerencia@coopsanfernando.pe')
                //->bcc('cayocq@gmail.com')
                ->send(new Contacto($datos));
                
        return redirect()->route('contacto.form')->with('msgSuccess', 'Mensaje enviado correctamente, en breve un asesor se comunicará contigo.');
    }
}
