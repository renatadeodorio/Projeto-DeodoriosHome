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
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>

                  @if($post->quadros)
                        <th><img src=" {{ asset('storage/'.$post->quadros) }}" width="150px" class="rounded-square"/></th>
                    @else
                        <th><img src=" {{ asset('storage/profile/dash.jpg') }}" width="150px" class="rounded-square"/></th>
                    @endif
                  <td>{{ $post->descricao }}</td>
                  <td>{{ $post->temas}}</td>
                  <td>{{ $post->formatos }}</td>
                  <td>{{ $post->tamanhos }}</td>
                  <td>{{ $post->artistas }}</td>
                  <td>{{ $post->precos }}</td>
                  <td>
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger text-white">Deletar</button>
            </form>
           </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
