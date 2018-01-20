<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;

class RegistersController extends Controller
{
    public function register(){
        $data=Input::except(array('_token'));

        $rule=array(
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'cpassword'=>'required|same:password'

        );

        $message=array(
            'cpassword.required'=>'the confirm password is required',
            'cpassword.min'=>'the confirm password must be at least characters',
            'cpassword.same'=>'the confirm password and password must be same',

        );

        $validator=Validator::make($data,$rule,$message);

        if($validator->fails()){
            return Redirect::to('register')->withErrors($validator);
        } else{
            
            Register::formstore(Input::except(array('_token','cpassword')));

            return Redirect::to('login')->with('succes','succesfully registered');
            
        }
    }

    public function login(){
        $data=Input::except(array('_token'));

        $rule=array(
            'email'=>'required',
            'password'=>'required'
        );

        $validator=Validator::make($data,$rule);

        if($validator->fails()){
            return Redirect::to('login')->withErrors($validator);
        } else{

            $userdata=array(
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            );

            if(Auth::attempt($userdata)){
                return Redirect::to('/');
            }else{
                return Redirect::to('login');
            }
        }
    }
}
