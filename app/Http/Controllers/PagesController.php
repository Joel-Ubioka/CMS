<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome');
    }


    public function about()
    {
      return view('about');
    }

    public function service()
    {
      return view('service');
    }

    public function project()
    {
      return view('project');
    }

    public function team()
    {
      return view('team');
    }

    public function testimonial()
    {
      return view('testimonial');
    }

    public function blog()
    {
      return view('blog');
    }

    public function detail()
    {
      return view('detail');
    }

    public function contacted()
    {
      return view('contact');
    }

    public function contact_message()
    {
      return view('contact_message');
    }

  
    
    


    public function form()
    {
      $this->validate(request(), [
        'name'=> 'required|min:6|max:12',
        'email'=> 'required',
        'subject'=> 'required',
        'message'=> 'required'
      ]);

        $data = request()->all();

        $contact = new Contact();

        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];

        $contact->save();

        return redirect('/contact_message');
     }
    }   


    