@extends('admin.email.mailbox')

@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('url_admin_email')}}">Mailbox</a></li>
        <li class="breadcrumb-item active">Rascunho</li>
    </ol>
@stop

@section('email')
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Escrever nova mensagem</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-default btn-sm" v-on:click="habilitarCopy()">
          CC
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>


    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif



    <form action="{{ route('enviar_email') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <input type="email" class="form-control" name="to" placeholder="To:">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="user_id" value="{{ auth()->user()->id}}" placeholder="To:">
        </div>

        <div v-show="copy">
          <div class="form-group">
            <input type="email" class="form-control" name="cc" placeholder="Cc:">
          </div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject:">
        </div>
        <div class="form-group">
            <textarea id="summernote" name="message" class="form-control" style="height: 300px"></textarea>
        </div>
        <div class="form-group">
          <div class="btn btn-default btn-file">
            <i class="fas fa-paperclip"></i> Attachment
            <input type="file" name="attachment">
          </div>
          <p class="help-block">Max. 32MB</p>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <div class="d-flex justify-content-between align-items-center">
          <div class="float-right">
            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Rascunho</button>
            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
          </div>
          <div>
            <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Descartar</button>
          </div>
      </div>
    </form>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection
