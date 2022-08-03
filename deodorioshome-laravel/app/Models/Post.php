<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
     'Id',
     'Quadros',
     'Descrição',
     'Temas',
     'Formatos',
     'Tamanhos',
     'Artistas',
     'Preços'
    ];

    public function getPosts(string $search = null)
    {
        $posts = $this->where( function ($query) use ($search) {
            if($search) {
                $query->where('temas', 'LIKE',"%{$search}%");
                $query->orWhere('quadros', 'LIKE',"%{$search}%");
            }
        })
        ->paginate(6);
        return $posts;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
