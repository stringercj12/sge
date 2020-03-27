@extends('adminlte::page')

@section('title', 'Mailbox')


@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Mailbox</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-3">
        @if (Route::currentRouteName() != 'url_admin_email_compose')
            <a href="{{ route('url_admin_email_compose') }}" class="btn btn-primary btn-block mb-3">
                <i class="far fa-envelope"></i>
                Novo e-mail
            </a>
        @endif
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pastas</font></font></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        </div>
        <div class="card-body p-0">
            <ul class="nav flex-column nav-pills nav-stacked">
                <li class="nav-link p-0">
                <a href="{{ route('url_admin_email_entrada') }}" class="nav-link">
                    <i class="fas fa-inbox"></i> Caixa entrada
                    <span class="badge bg-primary float-right">12</span>
                </a>
                </li>
                <li class="nav-link p-0">
                <a href="{{ route('url_admin_email_enviados') }}" class="nav-link">
                    <i class="far fa-envelope"></i> Enviados
                </a>
                </li>
                <li class="nav-link p-0">
                <a href="{{ route('url_admin_email_rascunho') }}" class="nav-link">
                    <i class="far fa-file-alt"></i> Rascunhos
                </a>
                </li>
                {{-- <li class="nav-link p-0">
                <a href="#" class="nav-link">
                    <i class="fas fa-filter"></i> Lixo
                    <span class="badge bg-warning float-right">65</span>
                </a>
                </li> --}}
                <li class="nav-link p-0">
                <a href="{{ route('url_admin_email_lixeira') }}" class="nav-link">
                    <i class="far fa-trash-alt"></i> Lixo
                </a>
                </li>
            </ul>
        </div>
        <!-- /.box-body -->
      </div>
    </div>

    <div class="col-md-9">
        {{-- @yield('email') --}}
        @hasSection('email')
          @yield('email')
        @else
          <div class="img-responsive">
            <h3 class="text-center">Tudo Pronto! Escollha o que deseja fazer ao lado</h3>
            <img src="http://jcfsoft-com.umbler.net/archives/mail.png" alt="" >
          </div>
        @endif
    </div>
  </div>

@endsection
