@extends('template.users')
@section('title','Dashboard')
@section('body')

<div class="card mt-3" style="width: 28rem;">
     <img src="{{ asset('storage/profile/dash.jpg') }}" class="card-img-top" alt="Dash">
     <div class="card-body-center">
       <h5 class="card-title">Bem vindo(a) à Deodorio's Home </h5>
       <p class="card-text">Quadros que contam histórias</p>
     </div>
 </div>
@endsection

