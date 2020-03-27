@extends('adminlte::page')

@section('title', 'Calendário')

@section('content_header')
    <h1>Meu Calendário</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="breadcrumb-item active">Calendário</li>
    </ol>
@stop

@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Eventos arrastáveis</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-green-gradient">Almoço</div>
                    <div class="external-event bg-yellow-gradient">Ir para casa</div>
                    <div class="external-event bg-aqua-gradient">Fazer trabalhos de casa</div>
                    <div class="external-event bg-blue-gradient">Trabalhar no design da interface do usuário</div>
                    <div class="external-event bg-red-gradient">Dorme bem</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        Remover após soltar
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Criar Evento</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                    </ul>
                  </div>

                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-btn">
                      <button id="add-new-event" type="button" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-outline card-primary">
              <div class="card-header with-border">
                <h3 class="card-title">
                  <i class="fa fa-calendar"></i>
                  Calendário
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                </div>
              </div>
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
