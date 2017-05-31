<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\Post;

use App\Apemesp\Models\PostView;

use App\Apemesp\Models\Tag;

use Auth;

use DB;

class PostRepository
{
	protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function setData()
	{
		$this->data = date("Y-m-d H:i:s");
	}

	public function getData()
	{
		return $this->data;
	}

	public function getPosts($destino)
	{
		return DB::table('posts')
         ->join('users', 'users.id', '=', 'posts.id_user')
         ->select('posts.*', 'users.name')
         ->where('id_destino', $destino)
         ->orderBy('posts.id', 'desc')
         ->paginate(6);
	}

	public function getTags()
	{
		return Tag::all();
	}

	public function storePost($request)
	{
		$post = new Post;
        $post->titulo = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->previa = $request->previa;
        $post->body = $request->conteudo;
        $post->id_user= Auth::user()->id;
        $post->id_destino = $request->destino;
        $post->id_tag= $request->tag;
        $post->created_at = $this->getData();
        $post->save();
        $view = New PostView;
        $view->id = $post->id;
        $view->total_visitas = 0;
        $view->save();
        return $post->id;
	}

	public function updateImage($id, $nomeArquivo)
	{
        Post::where('id', $id)
        ->update([
            'imagem_previa' => $nomeArquivo,
            'updated_at' => $this->getData()
            ]);
	}

	public function getPost($id)
	{
		return Post::find($id);
	}

	public function destroy($id)
	{
		Post::where('id', $id)->delete();
        PostView::where('id', $id)->delete();
	}

	public function search($request, $destino)
	{
		$query = "%" . $request->input('q') . "%";
		return DB::table('posts')
		->join('users', 'users.id', '=', 'posts.id_user' )
		->select('posts.*', 'users.name')
		->where([['titulo', 'LIKE', $query],['id_destino', '=', $destino]])
		->orderBy('posts.id', 'desc')
		->paginate(6);
	}


}




