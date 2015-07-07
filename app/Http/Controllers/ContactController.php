<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactController extends Controller {

    public function index(){
        app('seotools.metatags')->setTitle('');
        app('seotools.metatags')->setDescription('');

        return view('pages.contato');
    }

    public function send(Request $request){

        $validator = app('validator')->make($request->all(), [
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'celular' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'mensagem' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('contato')
                ->withErrors($validator)
                ->withInput();
        }


        extract($request->all());

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
            $message->to(env('MAIL_TO_EMAIL', 'irineu@mixd.com.br'), env('MAIL_TO_NAME', 'MIXD Internet'));
        });

        return redirect()->route('contato')->with('message', 'Email enviado com sucesso');
    }
}