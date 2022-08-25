<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{

    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Meu primeiro Post',
            'content' => 'Conteúdo qualquer',
            'author' => 'Everaldo'
        ];

        //Forma mais convencional de criar um registro no banco.
        //$post = new Post($new_post);
        //$post->save();

        $post = new Post();
        $post->title = 'Meu segundo Post';
        $post->content = 'Conteúdo qualquer';
        $post->author = 'Torres';
        $post->save();

        dd($post);
    }

    public function read(Request $r)
    {
        $post = new Post();

        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request)
    {

        /* //Atualizando um unico post
        $post = Post::find(1);
        $post->title = 'Meu Post atualizado';
        $post->save();
        return $post; */

        $posts = Post::where('id', '>', 1)->update([
            'author' => 'Everaldo'
        ]);
        
        return $posts;
    }
}
