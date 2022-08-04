@extends('template.users')
@section('title', "Pedido {$post->name}")
@section('body')
<h1>Pedido{{$post->name}}</h1>
@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
  @endif

 <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Tema</label>
      <input type="text" class="form-control" id="text" name="text" value="{{ $post->nome }}">
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Formato</label>
      <input type="text" class="form-control" id="text" name="text">
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Tamanho</label>
      <input type="text" class="form-control" id="text" name="text">
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Preço</label>
      <input type="text" class="form-control" id="text" name="text">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Selecione uma Imagem</label>
      <input type="file" class="form-control form control-md" id="image" name="image"/>
    </div>
      </label>
   </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
