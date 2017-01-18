<?php

namespace App\Http\Controllers;

use Theme;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class ChatController extends Controller {
    public function chat(){
        $id = Auth::id();

        Db::table('users')
            ->where('user_id',$id)
            ->update(['status' => 1]);

        $theme = Theme::uses('default')->layout('default')->setTitle('Simple Application');
        return $theme->of('index')->render();
    }

    public function chatLogin(){

        if(Auth::check()){

         return Redirect::to('home');

        }else{
            $theme = Theme::uses('default')->layout('default')->setTitle('login');
            return $theme->of('login')->render();
        }
    }

    public function LoadActive() {
        $theme = Theme::uses('default')->layout('default');
        return $theme->of('user-list')->render();
    }

    public function saveMessage() {
        $id = Input::get('user_id');
        $message = Input::get('message');
        $token = Input::get('_token');

        DB::table('message')
            ->where('user_id',$id)
            ->insert([
                'message' => $message,
                'user_id' => $id
            ]);
    }

}