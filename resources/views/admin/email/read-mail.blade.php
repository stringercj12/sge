@extends('admin.email.mailbox')

@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('url_admin_email')}}">Mailbox</a></li>
        <li class="active">Rascunho</li>
    </ol>
@stop

@section('email')
  <div class="box box-primary box-outline">
    <div class="box-header">
      <h3 class="box-title">Detalhes do e-mail</h3>

      <div class="box-tools">
        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
        <button type="button" class="btn btn-box-tool" data-widget="collapse">
          <i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    
    <!-- mailbox-read-info-inicio -->
    <div class="card-body p-0">
    @if (session('error'))
      <div class="alert alert-error">
        {{ session('error') }}
      </div>
    @endif
      <div class="mailbox-read-info">
        <h5>Assunto: {{ $emails->status }} <!-- Message Subject Is Placed Here --></h5>
        <h6>De: {{ $emails->from }}  <!-- support@adminlte.io -->
        <br>
          @if($emails->cc != '')
            CC: {{ $emails->cc }}
          @endif
          <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
      </div>
      <!-- mailbox-read-info-final -->
      
      <!-- mailbox-controls-inicio -->
      <div class="mailbox-controls with-border text-center">
        <div class="btn-group">
          <a href="{{ route('delete_email', ['id' => $emails->id]) }}" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
            <i class="far fa-trash-alt"></i>
            </a>
          <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
            <i class="fas fa-reply"></i>
            </button>
          <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
            <i class="fas fa-share"></i>
            </button>
        </div>

        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
          <i class="fas fa-print"></i>
          </button>
      </div>
      <!-- mailbox-controls-final -->
      
      <!-- mailbox-read-message-inicio -->
      <div class="mailbox-read-message" id="areaImpressao">
        @php
            echo $emails->message;
        @endphp
      </div>
      <!-- mailbox-read-message-final -->
    </div>
    
    
    <!-- Area de arquivos -->
    <div class="box-footer bg-white">
      <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
        <li>
          <span class="mailbox-attachment-icon">
            <i class="far fa-file-pdf"></i>
          </span>
          <div class="mailbox-attachment-info">
            <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                <span class="mailbox-attachment-size">
                  1,245 KB
                  <a href="http://jcfsoft-com.umbler.net/archives/anexo.pdf" class="btn btn-default btn-xs pull-right">
                    <i class="fas fa-cloud-download-alt"></i>
                  </a>
                </span>
          </div>
        </li>
        <li>
          <span class="mailbox-attachment-icon">
            <i class="far fa-file-word"></i>
          </span>

          <div class="mailbox-attachment-info">
            <a href="#" class="mailbox-attachment-name">
              <i class="fas fa-paperclip"></i> 
              App Description.docx
            </a>
            <span class="mailbox-attachment-size">
              1,245 KB
              <a href="#" class="btn btn-default btn-xs pull-right">
                <i class="fas fa-cloud-download-alt"></i>
              </a>
            </span>
          </div>
        </li>
        <li>
          <span class="mailbox-attachment-icon">
            {{-- <img src="http://jcfsoft-com.umbler.net/archives/photo1.png" alt="Attachment"> --}}
            <i class="far fa-file-image"></i>
          </span>

          
          <div class="mailbox-attachment-info">
            <a href="#" class="mailbox-attachment-name">
              <i class="fas fa-paperclip"></i> 
              photo1.png
            </a>
            <span class="mailbox-attachment-size">
              1,245 KB
              <a href="http://jcfsoft-com.umbler.net/archives/photo1.png" class="btn btn-default btn-xs pull-right">
                <i class="fas fa-cloud-download-alt"></i>
              </a>
            </span>
          </div>
        </li>
        <li>
          <span class="mailbox-attachment-icon">
            {{-- <img src="http://jcfsoft-com.umbler.net/archives/photo1.png" alt="Attachment"> --}}
            <i class="far fa-file-image"></i>
          </span>

          <div class="mailbox-attachment-info">
            <a href="#" class="mailbox-attachment-name">
              <i class="fas fa-paperclip"></i> 
              photo2.png
            </a>
            <span class="mailbox-attachment-size">
              1,245 KB
              <a href="http://jcfsoft-com.umbler.net/archives/anexo.pdf" class="btn btn-default btn-xs pull-right">
                <i class="fas fa-cloud-download-alt"></i>
              </a>
            </span>
          </div>
        </li>
      </ul>
    </div>

    <!-- Area de botões footer -->
    <div class="box-footer">
      <div class="d-flex justify-content-between align-items-center">
          <div class="float-right">
              <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Responder</button>
              <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Encaminhar</button>
            </div>
            <div class="float-left">
                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Apagar</button>
                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Imprimir</button>
            </div>
      </div>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection