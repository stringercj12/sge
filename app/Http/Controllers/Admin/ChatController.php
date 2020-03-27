<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function chat(){
        return view('admin.chat');
    }
}
