@extends('template.users')
@section('title', $title)
@section('body')
        <h1>Usuário {{ $user->name }}</h1>
        <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data Cadastro</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
         <th scope="row">{{ $user->id }}</th>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>{{ date('d/m/Y- H:i', strtotime($user->created_at)) }}</td>
         <td>
            <a href="" class="btn btn-warning text-white">Editar</a>
            <a href="" class="btn btn-danger text-white">Deletar</a>
        </td>
    </tr>
  </tbody>
</table>
 @endsection
