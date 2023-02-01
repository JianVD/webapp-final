<?php

namespace App\Http\Controllers;

use App\Notifications\announcement;
use Illuminate\Http\Request;
use App\Models\User;

class AnnouncementController extends Controller
{
    public function announcement(){

        $users = User::first();
        $user = [
            'header' => 'Email',
            'usertext' => 'You are a bitch',
            'url' => url('/announcement'),
            'ulol' => 'bitch'
        ];

        
    }
}
