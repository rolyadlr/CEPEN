<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudRecibida;
class SolicitudController extends Controller
{
    public function procesarFormulario(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'celular' => 'required|string|max:20',
            'acepto_datos' => 'required|accepted',
            'acepto_terminos' => 'required|accepted',
        ]);

        // Encriptación de datos sensibles 
        $datosEncriptados = [
            'nombres' => Crypt::encryptString($validatedData['nombres']),
            'apellidos' => Crypt::encryptString($validatedData['apellidos']),
            'correo' => Crypt::encryptString($validatedData['correo']),
            'celular' => Hash::make($validatedData['celular']),
        ];

        // guardar los datos en la base de datos y enviarlos por correo electrónico
        Solicitud::create($datosEncriptados);
        Mail::to($validatedData['correo'])->send(new SolicitudRecibida($datosEncriptados));
        // Retornar una respuesta de éxito
        return back()->with('mensaje', '¡Solicitud enviada con éxito!');
    }
}
