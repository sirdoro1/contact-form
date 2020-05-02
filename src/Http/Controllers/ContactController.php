<?php

namespace Sirdoro\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sirdoro\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact::contact');
    }

    public function send(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|string'
      ]);

      Contact::create($request->all());
      return redirect(route('contact'))->with('success',"Message Sent Successfully");
    }
}
