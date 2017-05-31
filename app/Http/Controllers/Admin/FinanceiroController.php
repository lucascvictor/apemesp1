<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Apemesp\Repositories\FinanceiroRepository;

use Auth;

use View;

class FinanceiroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth', ['except' => 'logout']);
    	
        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	return view('admin.admin.financeiro.financeiro');
    }

    public function busca(Request $request)
    {
        $financeiroRepository = new FinanceiroRepository;
        $posts = $financeiroRepository->busca($request->associado);
        unset($financeiroRepository);
        return view('blog.posts', compact('posts'));
    }
}

