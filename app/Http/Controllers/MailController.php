<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function html_mail(Request $req)
    {
        $contact = array(
            'name'    => $req->name,
            'email'   => $req->email,
            'subject' => $req->subject,
            'messages' => $req->message,
        );
        Mail::to(users:'kabosierik@gmail.com')->send(new \App\Mail\contactMe($contact));
        
        
        
        return redirect()->route('message')->with('status', 'Successfully Sent, Thank you!');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('kabosierik@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent!');
    }

    public function attached_mail(Request $req)
    {
        
        $description   = $req->description;
        $organization  = $req->organization;
        $title         = $req->title;
        $content       = $req->content;
        $resources     = $req->resources;
        $name          = $req->name;
        $phone         = $req->phone;
        $email         = $req->email;
        $comments      = $req->comments;
        
        $this->validate($req, [
          'image'           => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'description'     => 'nullable',
          'organization'    => 'required|min:4',
          'title'           => 'required|min:10',
          'content'         => 'required|min:10',
          'resources'       => 'required',
          'name'            => 'required|min:4',
          'phone'           => 'required|min:7|numeric',
          'email'           => 'required|email',
          'comments'        => 'required|min:10',
        ]);
        
        $image = $req->file('image');
        $destination = public_path() .'/img/emails/';
        $f_name= "Cover Photo";
        $extension = $image->getClientOriginalExtension();
        $filename = $name . '.' . $extension;
        $image->move($destination, $filename);
        
        $info = array(
            'description'  => $description,
            'organization' => $organization,
            'title'        => $title,
            'content'      => $content,
            'resources'    => $resources,
            'name'         => $f_name,
            'phone'        => $phone,
            'email'        => $email,
            'comments'     => $comments,
            'image'        => $filename
        );
        
        Mail::send('emails.mail_newsletter', $info, function ($message) use ($info, $destination, $filename)
        {
            $message->to('kericmugisha@gmail.com', 'Rwanda NCD Alliance')
                ->subject('New RNCDA Member news')
                ->replyTo($info['email'], $info['name'])
                ->returnPath($info['email'])
                ->sender($info['email'], $info['name'])
                ->priority(4);
            $message->attach($destination.'/'.$info['image']);
            $message->from('kabosierik@gmail.com', 'Louis Grigno');
        });
        return redirect()->route('add_newsletter')->with('status', 'Successfully Sent, Thank you for your collaboration!');

    }
}
