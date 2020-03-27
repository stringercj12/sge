<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Email;


class EmailController extends Controller
{
    private $email;
    public function __constructor(){
        $this->email = User::find($user->id)->relEmail;
    }
    
    public function index(){
        return view('admin.email.mailbox');
    }

    public function entrada(){
        return view('admin.email.entrada');
    }

    public function enviados(){
        $user = Auth::user();
        $emails = User::find($user->id)->relEmail;
        return view('admin.email.enviados', compact('emails'));
    }

    public function rascunho(){
        $user = Auth::user();
        $emails = User::find($user->id)->relEmail;
        return view('admin.email.rascunho', compact('emails'));
    }

    public function lixeira(){
        $user = Auth::user();
        $emails = User::find($user->id)->relEmail;
        return view('admin.email.lixeira', compact('emails'));
    }

    public function readMail($id){
        $emails = Email::find($id);
        return view('admin.email.read-mail', compact('emails'));
    }

    public function novoEmail(){

        return view('admin.email.compose');
    }

    public function deleteEmail($id){
        $delEmail = Email::find($id)->delete();
        if($delEmail){
            return redirect()->route('url_admin_email_entrada')->with('success', 'Email deletado com sucesso');
        }

        return redirect()->back()->with('success', 'Erro ao deletar email');
    }

    public function enviar_email(Request $request){
        $request['status'] = 'Novo';
            // dd($request);
        
        $email = Email::create($request->all());
        if($email){ 
            $messages = $request->message;
            // dd($messages);
            // Mail::to($request->to)->send(function);
            return redirect()->back()->with('success', 'E-mail enviado com sucesso');
        }
        return redirect()->back()->with('error', 'Erro ao enviar email, tente novamente mais tarde');
    }

}   
