<?php

namespace App\Http\Controllers;

use Theme;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class ChatController extends Controller {
    public function chat(){

        $theme = Theme::uses('default')->layout('default')->setTitle('Simple Application');
        return $theme->of('index')->render();
    }

    public function  home() {
        $theme = Theme::uses('default')->layout('default')->setTitle('Home');
        return $theme->of('home')->render();
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
        $token   = Input::get('_token');
        $id      = Input::get('user_id');
        $message = Input::get('message');

//        $msg = (array(
//            'id'      => $id,
//            'message' => $message,
//            'class'   => $class
//        ));
//        $data = ['message' => $msg];

        if (!empty($message)){

            DB::table('message')
                ->where('user_id',$id)
                ->insert([
                    'chat_message'       => $message,
                    'user_id'            => $id
                ]);
        }
    }

    public function updateStatus() {
        $id = Input::get('user_id');
        $currId = Input::get('data_status_id');

        DB::table('users')
            ->where('user_id',$id)
            ->update([
                'status' => $currId
            ]);
    }

}