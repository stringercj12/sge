@extends('admin.layouts.app')
<!-- Menu suspenso -->
@section('menu-')

<ul class="menu-modal-lista">
    <li class="lista-item">
        <a href="{{ route('admin.home.teste')}}" class="lista-link">
            <i class="fas fa-home"></i> No
        </a>
    </li>
     <li class="lista-item">
        <a href="#" class="lista-link">
            <i class="fas fa-user-graduate"></i> aa
        </a>
    </li> 
    <li class="lista-item">
        <a href="#" class="lista-link">
            <i class="fas fa-cash-register"></i> aaa
        </a>
    </li>
     <li class="lista-item">
        <a href="#" class="lista-link">
            <i class="fas fa-address-card"></i> aa aa
        </a>
    </li>
</ul>

@stop