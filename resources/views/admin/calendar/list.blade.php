@extends('adminlte::page')

@section('title', 'Lista de eventos')

@section('content_header')
<h1>Meu Calendário</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tasks.index') }}"><i class="fa fa-calendar"></i> Calendário</a></li>
    <li class="breadcrumb-item active">Lista de eventos</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <div class="card-title">
                        Lista de eventos
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>#</th>
                                <th>Name</th>
                                <th>Descrição</th>
                                <th>Data Inicial</th>
                                <th>Data Final</th>
                                <th>Image</th>
                                <th>Color</th>
                                <th>Background</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->date_start }}</td>
                                    <td>{{ $task->date_end }}</td>
                                    <td>{{ $task->image_event }}</td>
                                    <td>
                                        <div style="color:#f5f5f5; text-align: center; background-color: {{ $task->color }}">
                                            {{ $task->color }}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="color: #f5f5f5; text-align: center; background-color: {{ $task->backgroundColor }}">
                                            {{ $task->backgroundColor }}
                                        </div>
                                    </td>
                                    <td>{{ $task->status }}</td>
                                    <td>Ação</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>

@endsection
