<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContact(Request $request)
    {
        $data = $request->all();

        if ($data['email']=='') {
            return redirect()->route('contacts')->with('error','I campi inseriti non possono essere vuoti');
        }

        Mail::to('admin@gmail.com')->send(new ContactMail($data['name'],$data['email'],$data['description']));

        return redirect()->route('contacts')->with('success','Il form è stato inviato correttamente');
        
    }
}
