@extends('connect.master')

@section('title', 'Register')

@section('content')
<div class="box box_register shadow">
    <div class="header">
        <a href="{{ url('/') }}">
            <img src={{ url('/static/imges/desc.png ') }}"" alt="">
        </a>
    </div>

    <div class="inside">
        {!! Form::open(['url' => '/register']) !!}

            <label for="name">First name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-user"></i></div>
                </div>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>  

            <label for="last_name" class="mtop16">Last name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
                </div>
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>  

            <label for="email" class="mtop16">Email address</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>    

            <label for="password" class="mtop16">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></i></div>
                </div>
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <label for="password" class="mtop16">Confirm pasword</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></i></div>
                </div>
                {!! Form::password('repead_pass', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Register', ['class' => 'btn btn-primary mtop16']) !!}
        {!! Form::close() !!}

        @if (Session::has('message'))
            <div class="container">
                <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
                    {{Session::get('message')}}
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>                    
                    @endif
                    <script>
                        $('.alert').slideDown();
                        setTimeout(function(){$('.alert').slideUp(); }, 10000 );
                    </script>
                </div>
            </div>
        @endif

        <div class="footer mtop16">
            <a href="{{ url('/login') }}">Ya tengo una cuenta, Enter</a>
        </div>
    </div>
</div>
@stop