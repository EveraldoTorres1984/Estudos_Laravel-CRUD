<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            //No futuro, vai só exibir um formuláio(Método GET)
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

       return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //No futuro receberá um post com um novo recurso

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = new Post();

        $post = $post->find($id);

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        /* //Atualizando um unico post
        $post = Post::find(1);
        $post->title = 'Meu Post atualizado';
        $post->save();
        return $post; */

        $posts = Post::find($id)->update([
            'author' => 'Everaldo'
        ]);

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //Deletando apenas um item do banco
        /* $post =  Post::find(1);
        
        if($post){
           return $post->delete();
        }

        return 'Post inexistente'; */

        //Deletando todos os registros do Banco
        $post = Post::find($id)->delete();
        return $post;
    }
}
