<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Solicitud extends Mailable
{
    use Queueable, SerializesModels;

    public $datosEncriptados;

    /**
     * Create a new message instance.
     *
     * @param array $datosEncriptados
     */
    public function __construct($datosEncriptados)
    {
        $this->datosEncriptados = $datosEncriptados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
{
    dd($this->datosEncriptados); // Para depuración
    return $this->view('emails.solicitud_recibida')
                ->subject('Solicitud de Información Recibida')
                ->with('datosEncriptados', $this->datosEncriptados);
}

}
