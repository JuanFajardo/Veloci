<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class VelociMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $msj;
    public $titulo;


    public function __construct($nombre)
    {   
        $dato = explode("|", $nombre);

        $this->nombre = $dato[0];
        $this->email = $dato[1];
        $this->msj = $dato[2];
        $this->titulo = $dato[3];
    }

    
    public function build()
    {
        return $this->view('vehiculo.correo');
    }

}
