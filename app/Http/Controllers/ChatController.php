<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Notification;
use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;
use Theme;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;;
use PDF;
use File;
class ChatController extends Controller {
    public function chat(){
        $theme = Theme::uses('default')->layout('default')->setTitle('Simple Chat Application');
        return $theme->of('chat')->render();
    }
}