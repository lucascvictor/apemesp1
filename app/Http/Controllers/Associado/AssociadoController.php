<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Associado\AssociadoRepository;

use Input;

class AssociadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

         View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);  
         
        
    }

    public function getCidades($idEstado)
    {
       $associado = new AssociadoRepository; 
       $cidades = $associado->getCidades($idEstado);
       unset($associado);
       return response()->json(['cidades' => $cidades]);
    }

    public function getDownload($arquivo)
    {
        $file= public_path(). "/files/associado" . Auth::user()->id . "/" . $arquivo;
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'arquivo.pdf', $headers);
    }




}