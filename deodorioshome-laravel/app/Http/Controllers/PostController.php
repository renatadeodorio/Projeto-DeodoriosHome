<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\UserControllerException;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    protected $model;

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function index(Request $request)
    {
        $posts = $this->model->getPosts(
            $request->search ?? ''
        );

        return view('posts.index', compact('posts'));
    }

    public function show ($id)
    {
        //if(!$user = User::findOrFail($id))
          //return redirect()->route('users.index');
          $post = Post::findOrFail($id);

          if($post) {
              return view('posts.show', compact('post'));
          }else{
            throw new UserControllerException('Pedido não encontrado');
          }
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
       // $data['password'] = bcrypt($request->password);
        $data['quadros'] = $request->file('quadros')->store('posts', 'public');
        $data['descricao'] = $request->input('descricao');
        $data['temas'] = $request->input('temas');
        $data['formatos'] = $request->input('formatos');
        $data['tamanhos'] = $request->input('tamanhos');
        $data['artistas'] = $request->input('artistas');
        $data['precos'] = $request->input('precos');
        $data['user_id'] = Auth::user()->id;

        // if($request->image){
        // $file = $request['image'];
        // $path = $file->store('profile','public');
        // $data['image'] = $path;
        // }
        //$this->model->create($data);
        Post::create($data);
        $request->session()->flash('create', 'Quadro cadastrado com sucesso!');
        return redirect()->route('posts.index');
    }
    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('posts.index');

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        if(!$post = $this->model->find($id))
        return redirect()->route('posts.index');

        $data = $request->only('name');
        if($request->password)
            $data['password'] = bcrypt($request->password);

            $data['is_admin'] = $request->is_admin ? 1 : 0;

        $post->update($data);

       // return redirect()->route('users.index');
      // $request->session()->flash('edit', 'Usuário Atualizado com sucesso!');

       return redirect()->route('posts.index')->with('edit', 'Pedido Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        if(!$post = $this->model->find($id))
            return redirect()->route('posts.index');

        $post->delete();

        //return redirect()->route('users.index');
        return redirect()->route('posts.index')->with('destroy', 'Pedido deletado com sucesso!');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
