<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Models\NewsletterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    //

    public function store(Request $request){
        $request->validate([
            'email' => 'required|unique:newsletter_emails,email',
        ]);

        try{
            $newsletter = NewsletterEmail::create([
                'email' => $request->email,
            ]);
            try{
                Mail::to('info@earthtrektours.com')->send(new Newsletter($newsletter));
            }catch(\Exception $e){}

            return  Redirect::to(URL::previous() . "")->with(['successMsg' => ['Newsletter subscribe successfully!']]);

        }catch(\Exception $e){

             return Redirect::to(URL::previous() . "")->withErrors([$e->getMessage()]);
        }
    }
}
