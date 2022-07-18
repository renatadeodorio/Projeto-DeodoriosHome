<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
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
 </div>
</body>
</html>
