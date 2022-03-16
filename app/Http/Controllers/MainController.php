<?php

namespace App\Http\Controllers;
use App\ContectModel;
use App\AdminModel;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\AdminRequest;
class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function dsb(){
        return view('dsb');
    }
    public function setting(){
        return view('welcome');
    }
    public function admin(){
        return view('admin');
    }
    public function admin_check(AdminRequest $request){
        
           
        $review = AdminModel::create([
            'title' => $request->title,
            'text' => $request->text,
            'subject' => $request->subject
        ]);

        return redirect()->route('admin')->with('success' , 'Сообщение было отправлено');
    }
    
    public function form(){
        $reviews = ContectModel::orderBy('id', 'DESC')->get();
        return view('form' , ['reviews'=>$reviews ]);
    }
    public function form_check(ContactRequest $request){
        
           
        $review = ContectModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ]);

        return redirect()->route('form')->with('success' , 'Сообщение было отправлено');
    }
}
