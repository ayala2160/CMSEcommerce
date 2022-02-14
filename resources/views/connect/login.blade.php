@extends('connect.master')

@section('title', 'Login')

@section('content')
    <div class="box box_login shadow">
        {!! Form::open(['url' => '/login']) !!}
        <label for="email">Correo electrónico: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-envelope-open-text"></i></div>
            </div>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <label for="email" class="mtop16">Password: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
            </div>
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}
    </div>
@stop