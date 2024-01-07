<?php

namespace App\Http\Controllers;

use App\Mail\InboxMail;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index()
    {
        $page_title = "Home";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.home', $data);
    }

    public function about_us()
    {
        $page_title = "About Us";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.about_us', $data);
    }

    public function our_innovation()
    {
        $page_title = "Our Innovation";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.our_innovation', $data);
    }

    public function our_method()
    {
        $page_title = "Our Method";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.our_method', $data);
    }

    public function nutritional_properties()
    {
        $page_title = "Nutritional Properties";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.nutritional_properties', $data);
    }

    public function contact_us()
    {
        $page_title = "Contact Us";
        $data = [
            'page_title' => $page_title,
        ];
        return view('pages.contact_us', $data);
    }

    public function contact_us_store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email:rfc,dns',
            'message'    => 'required',
        ]);

        $inbox = Inbox::create($request->all());

        // Mail::mailer('smtp_mailtrap')->to($request->email)->send(new InboxMail($inbox));
        Mail::to($request->email)->send(new InboxMail($inbox));

        return response()->json([
            'success' => true,
            'message' => 'Thanks for your message. We will response as soon as posible.',
        ]);
    }
}
