<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Task;
use App\Color;
use Date;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.calendar.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = Task::all();
        $colors = Color::all();
        return view('admin.calendar.create', compact('tasks', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $valid = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date_start' => 'required',
            'date_end' => 'required'
        ]);



        $data = $request->all();
        // dd($request->date_start);
        $dateStart = strtotime($request->date_start);
        $dateEnd = strtotime($request->date_end);
        // dd($dateAtual, $dateEnd);

        if($dateEnd < $dateStart){
            return redirect()->route('tasks.create')->with('error', 'A data final não pode ser menor que data inicial do evento')->withInput();
        }
        
        // if($dateAtual > $dateStart){
        //     return redirect()->route('tasks.create')->with('error', 'A data inicial não pode ser menor que a atual');
        // }
        // dd($request->date_start);

        $data['date_start'] = Date("Y-m-d", strtotime($request->date_start));
        $data['date_end'] = Date("Y-m-d", strtotime($request->date_end));
        // dd($request->date_start, $data['date_start'],$dateStart, $data);
        $result = Task::create($data);

        if($result){
            return redirect()->route('tasks.create')->with('success', 'Novo evento criado');
        }else{
            return redirect()->route('tasks.create')->with('error', 'Erro ao cadastrar evento');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function list()
    {
        $tasks = Task::all();
        return view('admin.calendar.list', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
