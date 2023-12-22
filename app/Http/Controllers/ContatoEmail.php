<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoFormMail;

class ContatoEmail extends Controller
{
    public function enviarEmail(Request $request)
    {
        // Valide os dados do formulário aqui

        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $email = $request->input('email');

        // Envie o email
        Mail::to('email@destino.com')->send(new ContatoFormMail($nome, $telefone, $email));

        // Redirecione de volta para a página de contato ou outra página
        return redirect()->back()->with('success', 'Email enviado com sucesso!');
    }
}
