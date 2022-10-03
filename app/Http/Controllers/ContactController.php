<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormeRequest;
use App\Http\Controllers\ContactController;


class ContactController extends Controller
{
    public function create()
    {
        return \view('contacts.create');
    }
    public function store(ContactFormeRequest $request)
    {
        $message = Message::create($request->only('nom','email','message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));
        return 'Envoyer';
    }

}
