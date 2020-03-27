@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="my-2">
                    Olá, <strong>{{ auth()->user()->name }}</strong>, bem vindo de volta!
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Apply any bg-* class to to the info-box to color it -->

            <div class="col-md-4">
                <div class="info-box bg-green cursor-pointer" v-on:click="modal('Entregues')">
                    <span class="info-box-icon"><i class="fa fa-thumbs-up"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Eventos Futuros</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                        100% Increase in 30 Days
                    </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>

            <div class="col-md-4">
                <div class="info-box bg-yellow cursor-pointer" v-on:click="modal('Emprestimo')">
                    <span class="info-box-icon"><i class="fa fa-book"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Eventos em Andamento</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>

            <div class="col-md-4">
                <div class="info-box bg-red cursor-pointer" v-on:click="modal('Atrasados')">
                    <span class="info-box-icon"><i class="fa fa-thumbs-down"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Eventos Fechados</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                        40% Increase in 10 Days
                    </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div>
@stop
