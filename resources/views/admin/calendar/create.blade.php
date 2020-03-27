@extends('adminlte::page')

@section('title', 'Novo Evento')

@section('content_header')
<h1>Meu Calendário</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tasks.index') }}"><i class="fa fa-calendar"></i> Calendário</a></li>
    <li class="breadcrumb-item active">Novo evento</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="sticky-top mb-3">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Últimos eventos cadastrados</h4>
                    </div>
                    <div class="card-body">
                        <!-- the events -->
                        <div id="external-events">
                            @if(count($tasks) > 0)
                                @foreach($tasks as $task)
                                    <div class="external-event bg-green-gradient"
                                    style="color: {{ $task->color }}; background: {{ $task->backgroundColor }}">
                                        {{ $task->name }}
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-muted">
                                    Nenhum evento encontrado
                                </div>
                            @endif
                            {{-- <div class="checkbox">
                                <label for="drop-remove">
                                    <input type="checkbox" id="drop-remove">
                                    Remover após soltar
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cores cadastradas</h3>
                    </div>
                    <div class="card-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul class="fc-color-picker" id="color-chooser">
                                <li><span class="cursor-pointer text-aqua"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-blue"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-light-blue"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-teal"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-yellow"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-orange"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-green"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-lime"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-red"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-purple"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-fuchsia"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-muted"><i class="fa fa-square"></i></span></li>
                                <li><span class="cursor-pointer text-navy"><i class="fa fa-square"></i></span></li>
                            </ul>
                        </div>

                        {{-- <p><strong>Adicionar uma nova cor.</strong></p>
                        <div class="input-group">
                            <div>
                                <input id="new-event" type="text" name="corName" class="form-control w-50" placeholder="Name" v-model="setCor.corName">
                                <input id="new-event" type="text" name="corValue" class="form-control w-50" placeholder="Value" v-model="setCor.corValue">
                            </div>

                            <div class="input-group-btn">
                                <button type="button" id="add-new-event" type="button" class="btn btn-primary btn-flat" v-on:click="setColor()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-outline card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">
                        <i class="fa fa-calendar text-green"></i>
                        Criar novo evento
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-card-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @else
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif

                    <form action="{{ route('tasks.store') }}" method="post" class="formEvento">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="required"><strong>Nome do evento:</strong></label>
                                    <input type="text" class="form-control" name="name" placeholder="Event Name" />
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="required"><strong>Selecione uma cor:</strong></label>
                                    <select name="color" class="form-control">
                                        <option value="">Selecione</option>
                                        @foreach ($colors as $color)
                                            <option style="background-color: {{ $color->value }}" value="{{ $color->value }}">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="required"><strong>Selecione uma cor de fundo:</strong></label>
                                    <select name="backgroundColor" class="form-control">
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <label for="" class="required"><strong>Descrição:</strong></label>
                        <div class="form-group">
                            <textarea class="form-control" id="summernote" name="description" placeholder="Description..."></textarea>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="required"><strong>Data inicial:</strong></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="date_start" class="date" placeholder="Data Start"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="required"><strong>Data final:</strong></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="date_end" class="date" placeholder="Data End"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><strong>Imagem do evento:</strong></label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-image"></i></span>
                                       </div>
                                        <input type="file" class="form-control d-none" v-on:change="imageEnvent($event)" name="imageEvent" id="imageEvent" placeholder="Imagem do evento"/>
                                        <div class="form-control" v-html="filename.name">
                                            <span>Selecione uma imagem</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-save"></i> salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $('.date').datepicker({
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            multidateSeparator: "-",
            language: 'pt-BR',
            format: "dd/mm/yyyy",
            beforeShowDay: function(date){
                if (date.getMonth() == (new Date()).getMonth())
                    switch (date.getDate()){
                    case 4:
                        return {
                        tooltip: 'Example tooltip',
                        classes: 'active'
                        };
                    case 8:
                        return false;
                    case 12:
                        return "green";
                }
                },
            beforeShowMonth: function(date){
                if (date.getMonth() == 8) {
                    return false;
                }
                },
            beforeShowYear: function(date){
                if (date.getFullYear() == 2007) {
                    return false;
                }
                },
            // datesDisabled: ['11/06/2019', '11/21/2019'],
            toggleActive: true
        });
    </script>
@endsection
