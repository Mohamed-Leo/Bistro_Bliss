<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\contactvalid;
use App\Models\ContactForm;
use App\Models\User;
use App\Notifications\ContactsNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactFormController extends Controller
{
    public function contactaction (contactvalid $request) {

        if(auth()->user()) {
            // check if user match data-----------
            if(auth()->user()->name == $request->name && auth()->user()->email == $request->email) {
                $contact_model = new ContactForm();

                $contact_model->name = $request->name;
                $contact_model->email = $request->email;
                $contact_model->subject = $request->subject;
                $contact_model->message = $request->message;
                $contact_model->user_id = auth()->user()->id;
                $contact_model->save();

                $status = 'pending';
                // send notification--------
                $user = User::where('id' , auth()->user()->id)->get();
                Notification::send($user , new ContactsNotify($request->name , $request->email, $request->subject ,$request->message, $status));
                return redirect()->route('contact.form');
            }
            else {
                $error = "your username and email doesn't match";
                return view('contactform' , compact('error'));
            }
        }
        else {
            $error = 'sorry , you have to login first';
            return view('contactform' , compact('error'));
        }
    }
}

