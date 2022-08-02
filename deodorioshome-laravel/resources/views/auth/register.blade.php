@extends('template.users')
@section('title', 'Login')
@section('body')
    <h1>Registrar-Se</h1>
    <div class="justify-content-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="name" />
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Senha</label>
                <input type="password" id="password" class="form-control" name="password"/>
            </div>
            <!-- Confirm Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password_confirmation">Confirme a Senha</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required/>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Registrar</button>
        </form>
    </div>

@endsection