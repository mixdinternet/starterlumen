<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\SendContact;


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

        app('events')->fire(new SendContact($request)); # or event()

        return redirect()->route('contato')->with('message', 'Email enviado com sucesso');
    }
}