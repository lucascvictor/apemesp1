@extends('admin.dashboard')

@section('titulo', 'Associados')

@section('conteudo')

    <div class="col-md-4" style="float: right;">
               
        {{ Form::open(['action' => ['Admin\AssociadoController@search'], 'method' => 'GET']) }}
        <div class="form-group input-group">
        {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Procurar Associados', 'class' => 'form-control'])}}

        <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></span>
        </div>
    {{ Form::close() }}
  </div>  


<div class="row">
	<div class="col-md-10">
		<div class="row">
                    <div class="col-lg-10">
                        <h2>Lista de Associados</h2>

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome do Associado</th>
                                        <th>CPF</th>
                                        <th>Tel. Celular</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($associados as $associado)
								<tr>
                                        <td>{{ $associado->name }}</td>
                                        <td>{{ $associado->cpf }}</td>
                                        <td>{{ $associado->tel_celular }}</td>
                                        <td><a class="btn btn-default" href="/admin/associados/perfil/editar/{{ $associado->id }}">Alterar</a></td>
                                        <td><a class="btn btn-primary" href="/admin/associados/perfil/{{ $associado->id }}">Visualizar Perfil</a></td>
                                    </tr>

								@endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
		<p> {{ $associados->links() }} </p>
	</div>


</div>

@endsection