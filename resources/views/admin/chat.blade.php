@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Minhas Mensagens</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Chat</li>
    </ol>
@stop

@section('content')
    <!-- Construct the box with style you want. Here we are using box-danger -->
    <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
    <!-- The contextual class should match the box, so we are using direct-chat-danger -->

    <div class="row">
        <div class="col-md-6">
            <div class="box box-purple direct-chat direct-chat-danger">
                <div class="box-body">
                    <ul class="contacts-list">
                        @foreach($users as $contato)
                            <li>
                                <a href="#">
                                    <div class="circle img-fluid">
                                        <img class="contacts-list-img circle"
                                             src="{{ $contato->image }}"
                                             alt="Contact Avatar">
                                    </div>
                                    <div class="contacts-list-info">
                                          <span class="contacts-list-name">
                                            <span class="text-muted">{{ $contato->name }}</span>
                                            <small class="contacts-list-date pull-right">2/28/2015</small>
                                          </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-purple direct-chat direct-chat-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Chat Online - {{ auth()->user()->name }}</h3>
                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">3</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <!-- In box-tools add this button if you intend to use the contacts pane -->
                        <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Jefferson C. Ferreira</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img"
                                 src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg"
                                 alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">{{ auth()->user()->name }}</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img"
                                 src="https://adminlte.io/themes/AdminLTE/dist/img/user3-128x128.jpg"
                                 alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img"
                                         src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg"
                                         alt="Contact Avatar">
                                    <div class="contacts-list-info">
                                          <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date pull-right">2/28/2015</small>
                                          </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-btn">
          <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-send"></i> Enviar</button>
        </span>
                    </div>
                </div>
                <!-- /.box-footer-->
            </div>
        </div>
    </div>

    <!--/.direct-chat -->
@stop
