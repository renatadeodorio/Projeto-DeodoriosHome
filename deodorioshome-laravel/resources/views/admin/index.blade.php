@extends('template.users')
@section('title','Dashboard')
@section('body')

<div class="card mt-3" style="width: 22rem;">
     <img src="{{ asset('storage/profile/dash.jpg') }}" class="card-img-top" alt="Dash">
     <div class="card-body-center">
       <h4 class="card-title">Seja Bem vindo(a)! </h4>
       <p class="card-text"> ✰ Quadros que contam histórias ✰</p>
     </div>
 </div>
@endsection

