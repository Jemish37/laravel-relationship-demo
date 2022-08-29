<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function one2one()
    {
        $user = User::with('contact')->get();
        // $user = User::with('contact')->first();
        // return $user;
        // return $user->contact;
        return $user->toArray();
    }

    function one2oneReverse()
    {
        $contact = Contact::with('user')->get();
        // $contact = Contact::with('user')->first();
        // return $contact;
        // return $contact->user;    //gives an error 
        return $contact->toArray();
    }
}
