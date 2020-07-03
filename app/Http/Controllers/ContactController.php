<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            $user = new \stdClass();
            $user->name = $request->name;
            $user->email = env("MAIL_TO_ADDRESS");
            $user->emailFrom = $request->email;
            $user->tel = $request->tel;
            $user->assunto = $request->assunto;
            $user->mensagem = $request->mensagem;
            \Illuminate\Support\Facades\Mail::send(new \App\Mail\newSendMail($user));
            return view("displayEmailSend");
        }catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }
}
