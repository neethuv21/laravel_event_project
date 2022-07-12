<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use App\Models\book;
use App\Models\admin;


class eventController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
     public function insert(Request $req){
        $username=$req->input('username');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        $gender=$req->input('gender');
        
        $data=['username'=>$username,'email'=>$email,'phone'=>$phone,'password'=>$password,'gender'=>$gender];
        registration::insert($data);
        return redirect('/index');
        
    } 
     public function login(){
        return view('login');
    }
    public function loginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=registration::where('email',$email)->where('password',$password)->first();
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/booking');

        }else{
            return redirect('/login')->with('error','invalid details');
        }
    }
    public function booking(){
        return view('booking');
    }
    public function bookinsert(Request $req){
        $uid=session('sess');
        $name=$req->input('name');
        $place=$req->input('place');
        $dte=$req->input('dte');
        $time=$req->input('time');
        $data=['uid'=>$uid,'name'=>$name,'place'=>$place,'dte'=>$dte,'time'=>$time];
        book::insert($data);
        return redirect('/bdetails');
        
    }

     public function logout(Request $req){
        $req->session()->forget('ses');
        return redirect('/index');
     } 
    public function bdetails(){
        $uid=session('sess');
        $data['result']=book::where('id',$uid)->get();

        return view('bdetails',$data);
    }

    public function adminlogin(){
        return view('adminlogin');

    }

    public function adminloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=admin::where('email',$email)->where('password',$password)->first();
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/admin');

        }else{
            return redirect('/adminlogin')->with('error','invalid details');
        }
    }
    public function admin(){
    
        $data['result']=registration::get();
        return view('admin',$data);
    }
    public function bkdetails($id){

        $data['result']=book::get();
        return view('bkdetails',$data);
    }
    public function adminapprove($id){
    $data=['status'=>"Confirm"];
    book::where('id',$id)->update($data);
    return redirect('/admin');
}
public function admincancel($id){
    $data=['status'=>"cancel"];
    book::where('id',$id)->update($data);
    return redirect('/admin');
}
public function adminlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/adminlogin');
     } 

}
