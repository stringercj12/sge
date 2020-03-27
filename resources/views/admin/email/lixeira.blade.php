@extends('admin.email.mailbox')

@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('url_admin_email')}}">Mailbox</a></li>
        <li class="breadcrumb-item active">Lixeira</li>
    </ol>
@stop

@section('email')
<div class="card card-outline card-primary">
  <div class="card-header with-border">
    <h3 class="card-title">
      <i class="fas fa-inbox"></i>
      Lixeira
    </h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body no-padding">
        @php  $j = 9; @endphp

      @if($j)
    <div class="d-flex justify-content-between">
        {{-- <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fas fa-square"></i>
        </button> --}}
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-trash text-red"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply text-primary"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share text-primary"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-redo text-success"></i></button>
        </div>

        <div class="pull-right">
          1-50 / 200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
   </div>
   @endif

    <div class="table-responsive mailbox-messages">

        <table class="table table-hover table-striped">
            <tbody>

              @for($i = 0; $i < $j; $i++)
                <tr>
                    <td>
                      <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                          <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper"
                          style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                      </div>
                    </td>
                    <td class="mailbox-star">
                      <a href="#">
                        <i class="fa fa-star text-yellow"></i>
                      </a>
                    </td>
                    <td class="mailbox-name">
                      <a href="{{ route('url_admin_email_read_mail', ['id' => $i]) }}">Alexander Pierce</a>
                    </td>
                    <td class="mailbox-subject">
                      <b>Problema no AdminLTE 2.0</b> - Tentando encontrar uma solução para este problema ...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 mins atrás</td>
                </tr>
              @endfor

              @if($i == 0)
                <caption class="text-center">Pasta vazia, aqui não possui nenhum e-mail</caption>
              @endif


            </tbody>
        </table>
    </div>

  </div>

</div>
@endsection
