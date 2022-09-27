<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;


class ContactController extends Controller
{
    public function create()
    {
        return \view('contacts.create');
    }

}
