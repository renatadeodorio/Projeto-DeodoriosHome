@extends('template.users')
@section('title', 'Login')
@section('body')
    <h1>Login</h1>
    <div class="justify-content-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Senha</label>
                <input type="password" id="form2Example2" class="form-control" name="password"/>
            </div>
            <div class="col mb-5">
                <!-- Simple link -->
                <a href="{{ route('password.request') }}">Esqueceu a Senha?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
        </form>
    </div>

@endsection