<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Assunto;

use DB;

class FinanceiroRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Post::where('title', 'like', $busca)->orWhere('content', 'like', $busca)->get();
	}


}