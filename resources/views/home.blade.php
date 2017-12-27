@extends('layouts.app')

@section('content')
<!--Advertencía de usuario logueado-->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    <!--Si user == 1 vamos al panel de admin-->
                   @if (Auth::user()->user == 1)
                    <a href="{{url('admin')}}">Panel de Administrador</a>
                        @endif
                        <a href="{{ url('/inicio') }}">Inicio</a>
                    
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
                @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


