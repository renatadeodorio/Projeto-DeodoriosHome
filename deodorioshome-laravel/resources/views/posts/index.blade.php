@extends('template.users')
@section('title', 'Listagem de Postagens')
@section('body')
<h1>Quadros Personalizados</h1>

<div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a href="{{ route('posts.create') }}" class="btn btn-outline-dark">Novo Quadro</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('posts.index') }}" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control rounded" name="search" />
                    <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Quadros</th>
            <th scope="col">Descrição</th>
            <th scope="col">Temas</th>
            <th scope="col">Formatos</th>
            <th scope="col">Tamanhos</th>
            <th scope="col">Artistas</th>
            <th scope="col">Preços</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($posts as $post)
                <tr>
                    @if($post->image)
                        <th><img src=" {{ asset('storage/'.$post->image) }}" width="50px" height="50px" class="rounded-square"/></th>
                    @else
                        <th><img src=" {{ asset('storage/profile/dash.jpg') }}" width="50px" height="50px" class="rounded-square"/></th>
                    @endif
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
    </div>

    @endsection
