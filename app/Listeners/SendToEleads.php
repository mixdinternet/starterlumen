<?php

namespace App\Listeners;

use App\Events\SendContact;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client as HttpClient;

class SendToEleads
{
    public function __contruct()
    {

    }

    public function handle(SendContact $event)
    {
        extract($event->request->all());

        $id    = env('ELEADS_ID'   , false);
        $token = env('ELEADS_TOKEN', false);

        if (!$id) {
            return false;
        }

        $client = new HttpClient();

        $fields =['form_params'     => [
                'token'   => $token,
                'id'       => $id,
                'nome'     => $nome,
                'email'    => $email,
                'estado'   => $estado,
                'cidade'   => $cidade,
                'telefone' => $celular,
                'descricao'=> $mensagem,
            ]
        ];

        $res = $client->post('http://eleads.io/api', $fields);

        if ($res->getStatusCode() == "200") {
            return true;
        }

        return false;

    }
}