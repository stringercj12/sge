<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;

class TasksConfigController extends Controller
{
    public function config(){
        return view('admin.calendar.config');
    }

    public function configEdit(){
        return 'Salvando edição das configurações do calendario';
    }

    public function addColor(Request $request){
        $colors = Color::create($request->all());
        return redirect()->route('tasks.config.addColor')->with('success', 'Nova cor adicinada');
    }

    public function listColor(){
        $colors = Color::all();
        return view('tasks.config.listColor', compact('colors'));
    }
}
