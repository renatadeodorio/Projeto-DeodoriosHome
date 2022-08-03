@extends('template.users')
@section('title', 'Novo Quadro')
@section('body')
    <h1>Novo Quadro</h1>

  @if($errors->any())
     <div class="alert alert-danger" role="alert">
     @foreach($errors->all() as $error)
            {{ $error }}<br>
     @endforeach
     </div>

    @endif
    <form action="{{ route('posts.create') }}" method="POST" enctype="multipart/form-data">
       @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Quadros</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="text" name="text">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Temas</label>
        <input type="text" class="form-control" id="text" name="text">
      </div>
      <div class="mb-3">
      <label for="text" class="form-label">Formatos</label>
        <input type="text" class="form-control" id="text" name="text">
      </div>
      <div class="mb-3">
      <label for="text" class="form-label">Tamanhos</label>
        <input type="text" class="form-control" id="text" name="text">
      </div>
      <div class="mb-3">
      <label for="text" class="form-label">Preços</label>
        <input type="text" class="form-control" id="text" name="text">
      </div>
      <div class="mb-3">
          <label for="image" class="form-label">Selecione uma Imagem</label>
          <input type="file" class="form-control form control-md" id="image" name="image" />
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @endsection
