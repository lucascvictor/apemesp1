@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<form class="form-horizontal">
		<fieldset>

				
				<legend>Formação Acadêmica</legend>

				<!-- Categorias -->
				<div class="form-group">
                                <label class="col-md-4 control-label" for="nome">Categoria:</label>  
					  <div class="col-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="">Mt.Bacharel
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">Mt.Especialista
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">Mt.Estudante
                                    </label>
                                </div>
                                 <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="4">Colaborador
                                    </label>
                                </div>
                       </div>
                 </div>

                 <!-- Campo LinkedIn -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span></label>  
					  <div class="col-md-4">
					  <input id="ies" name="ies" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" required="">
					  </div>
					</div>


				<!-- Campo IES -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nomeies">Nome da IES:</label>  
					  <div class="col-md-4">
					  <input id="nomeies" name="nomeies" type="text" placeholder="Instituição de Ensino" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Campo Titulo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
					  <div class="col-md-4">
					  <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Campo Nascimento -->
					<div class="form-group">
			
                <label class="col-md-4 control-label" for="ano">Ano de Conclusão:</label>
                <div class="col-md-4">
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="nascimento" data-link-format="yyyy-mm-dd">
                    <input name="ano" id="ano" class="form-control" type="text" value="" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
      			  </div>
        
        <!-- Campo Titulo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Titulo do TCC:</label>  
					  <div class="col-md-4">
					  <input id="tcc" name="tcc" type="text" placeholder="TCC" class="form-control input-md" required="">
					  </div>
					</div>
					

				

				<!-- Botão -->
					<div class="form-group">
					  
					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
					  </div>
					</div>


		</fieldset>
</form>

@endsection