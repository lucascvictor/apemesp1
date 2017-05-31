<?php

namespace App\Http\Controllers\Emails;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Apemesp\Models\Assunto;

use Mail;

use Session;

class EmailController extends Controller
{
	protected	$email;
    protected   $nome;
    protected   $mensagem;
    protected   $telefone;
    protected   $date;

    public function send(Request $request){
    	$this->setEmail($request->email);
       	$this->setNome($request->nome);
    	$this->setTelefone($request->telefone);
    	$this->setMensagem($request->mensagem);
    	$this->setDate(date("m-d-Y H:i:s"));

    	$assunto = $request->assunto;
    	$assunto_ = Assunto::find($assunto);


    	$dados = array(
			'titulo' => $assunto_->assunto,
			'mensagem' => $this->getMensagem(), 
			'nome' => $this->getNome(),
			'telefone' => $this->getTelefone(),
			'email' => $this->getEmail(),
			'data' => $this->getDate(),
    		);
    	Mail::send('emails.send', $dados, function ($message) use ($assunto_)
    	{
    		$message->from($this->getEmail(), $this->getNome());
    		$message->to($assunto_->email)->subject($assunto_->assunto);
    	});
    	
    Session::flash('sucesso', 'A mensagem foi enviada com sucesso');
    
    return redirect()->route('contato.mensagens');
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getMensagem(){
		return $this->mensagem;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}


	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}
}
