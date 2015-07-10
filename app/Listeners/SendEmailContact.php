<?php

namespace App\Listeners;

use App\Events\SendContact;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailContact
{
    public function __contruct()
    {

    }

    public function handle(SendContact $event)
    {
        extract($event->request->all());

        $content = "
            Nome: $nome <br />
            Email: $email <br />
            Telefone: $telefone <br />
            Celular: $celular <br />
            Cidade: $cidade - $estado <br />
            Mensagem: $mensagem <br />
            ";
        app('mailer')->send('emails.fale-conosco', [
            'nome' => env('MAIL_TITLE', 'MIXD Internet'),
            'host' => 'http://' . $_SERVER['HTTP_HOST'] .'/',
            'conteudo' => $content
        ], function($message) use ($email, $nome)
        {
            $message->from($email, $nome);
            $message->subject(env('MAIL_TITLE', 'MIXD Internet') . ' :: Contato');
            $message->to(env('MAIL_TO_ADDRESS', 'lumen@mixd.com.br'), env('MAIL_TO_NAME', 'MIXD Internet'));
        });

    }
}