<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class ChatController extends Controller {

//    public function chat(){
//
//        $theme = Theme::uses('default')->layout('default')->setTitle('Simple Application');
//        return $theme->of('index')->render();
//    }
    /**
     * render view of index.blade.php
     */
    public function  home() {
        $theme = Theme::uses('default')->layout('default')->setTitle('Home');
        return $theme->of('home')->render();
    }

    /**
     * check user if logged in
     * redirect back to login page if user not logged in
     */
    public function chatLogin(){

        if(Auth::check()){

            return Redirect::to('home');

        }else{
            $theme = Theme::uses('default')->layout('default')->setTitle('login');
            return $theme->of('login')->render();
        }
    }

    /**
     * load active user from chat room.
     * render view of user-list.blade.php
     */
    public function LoadActive() {
        $theme = Theme::uses('default')->layout('default');
        return $theme->of('user-list')->render();
    }

    /**
     * load suggested friends
     * render view of friends.blade.php
     */
    public function LoadFriends() {
        $theme = Theme::uses('default')->layout('default');
        return $theme->of('friends')->render();
    }

    /**
     * save chat message function goes here
     */
    public function saveMessage() {
        $id      = Input::get('user_id');
        $message = Input::get('message');
        $chat_room_id = Input::get('chat_room_id');

//        $msg = (array(
//            'id'      => $id,
//            'message' => $message,
//            'class'   => $class
//        ));
//        $data = ['message' => $msg];

        if (!empty($message)){

            DB::table('message')
                ->where('chat_from',$id)
                ->insert([
                    'chat_from'          => $id,
                    'chat_message'       => $message,
                    'chat_room_id'       => $chat_room_id
                ]);
        }
    }

    /**
     * function update status
     */
    public function updateStatus() {
        $id = Input::get('user_id');
        $currId = Input::get('data_status_id');

        DB::table('users')
            ->where('user_id',$id)
            ->update([
                'status' => $currId
            ]);
    }

    /**
     * function retrieve message of selected chat room (users)
     */
    public function retrieveMessage() {

       $chat_room_id = Input::get('room_id');

       $result = DB::table('message')
            ->where('chat_room_id',$chat_room_id)
            ->get();

       $data = array(
           'chat_message' => $result,
           'room_id' => $chat_room_id
       );
       $theme = Theme::uses('default')->layout('default');
       return $theme->of('message',$data)->render();
    }

}