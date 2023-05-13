<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Models\Setting;
use App\Models\Comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $commets = Comment::orderBy('id', 'desc')->paginate(2);
        $setting = Setting::orderBy('id','asc')->get()->last();

        return view('home', ['comments' => $commets, 'setting' => $setting]);
    }

    public function home()
    {
        $commets = Comment::orderBy('id', 'desc')->get();

        $setting = Setting::orderBy('id','asc')->get()->last();
        
        return view('welcome', ['comments' => $commets, 'setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::orderBy('id','asc')->get()->last();
        return view('contact', ['setting' => $setting]);
    }

    public function sendMessage(Request $request)
    {
        Mail::to('luis.gb2212@gmail.com')->send(new MessageMail($request->name, $request->email, $request->service, $request->message));

        return redirect()->back();
    }
}
