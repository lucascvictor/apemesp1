


<!-- LOGOTIPO MOBILE -->
<div class="logotipo_mobile">
<a href="{{ url('/')}}" title="APEMESP"><img src="{{ url('images/logo_mobile.png') }}" alt="APEMESP" title="APEMESP"></a>
</div>
<!-- LOGOTIPO MOBILE -->

<div id="header">

<!-- LOGOTIPO -->
<div class="logotipo_header">
<a href="#" title="APEMESP"><img src="{{ url('images/logo.png') }}" alt="APEMESP" title="APEMESP"></a>
</div>
<!-- LOGOTIPO -->

  @if(isset(Auth::user()->id))


    <div id="login_header2" class="borda">

      @if(Auth::user()->id_perfil == 1)

      <a href="{{ url('/admin') }}"><p style="font-size: 12px;">Área do<br />Administrador</p></a>
      {{  Html::image('images/perfis/admin.png',  '', array('style' => 'width: 60px; height: 60px;', 'class' => 'img-circle')) }}

      @elseif(Auth::user()->id_perfil == 2)

      <a href="{{ url('/admin') }}"><p style="font-size: 12px;">Área do<br />Redator</p></a>
      {{  Html::image('images/perfis/redator.png',  '', array('style' => 'width: 70px; height: 70px;', 'class' => 'img-circle')) }}

      @else

      <a href="{{ url('/admin') }}"><p style="font-size: 12px;">Área do<br />Associado</p></a>
      {{  Html::image('files/' . Auth::user()->id . '/' . Auth::user()->id . '.jpg',  '', array('style' => 'width: 70px; height: 70px;', 'class' => 'img-circle')) }}
      @endif

      <a href="{{ url('/logout')}}" title="Sair">Sair</a>
    </div>


  <!-- ÁREA DO CLIENTE -->

  @else
<!-- ÁREA DO CLIENTE -->
<div id="login_header2" class="borda" >
<h2>Área do<br />Associado</h2>
<form method="POST" action="{{ url('/login') }}">
{{ csrf_field() }}
<input type="text" name="email"placeholder="E-mail" />
<input type="password" name="password" placeholder="Senha"/>
<br />
<button type="submit" class="esconder"></button>
<p> Não é cadastrado? </p>
<a href="{{ url('/register')}}" title="Associe-se">Associe-se</a>
</form>
</div>
<!-- ÁREA DO CLIENTE -->


@endif

<!-- MENU -->
  <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px; margin-right: 5%; ">

      <ul class="nav navbar-nav navbar-right" >
      

        <li><a href="{{ url('/') }}">&nbsp &nbsp Home &nbsp</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> A Apemesp <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/apemesp/quemsomos') }}">Quem Somos</a></li>
              <li><a href="{{ url('/apemesp/estatuto') }}">Estatuto</a></li>
              <li><a href="{{ url('/apemesp/comissoes') }}">Comissões</a></li>
              <li><a href="{{ url('/register') }}">Associe-se</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Musicoterapia <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/musicoterapia/oquee') }}">O que é?</a></li>
              <li><a href="{{ url('/musicoterapia/formacao') }}">Formação</a></li>
              <li><a href="{{ url('/musicoterapia/conquistas') }}">Conquistas</a></li>
              <li><a href="{{ url('/musicoterapia/literatura') }}">Literatura</a></li>
              <li><a href="{{ url('/musicoterapia/linhadotempo') }}">Linha do tempo da Mt em SP</a></li>
              </ul>
            </li>
          <li><a href="{{ url('/agenda') }}"> Agenda</a></li>
      
        @if(isset(Auth::user()->id))
        <li><a href="{{ url('/forums') }}">Forum</a></li>
        @endif
        <li><a href="{{ url('/jomesp') }}">Jomesp</a></li>
        <li><a href="{{ url('/encontreummt') }}"> Encontre um MT</a></li>

        <li><a href="{{ url('/contato/mensagens') }}">Contato</a></li>
       
        
      </ul>
      </div>

</nav>
<!-- MENU -->

</div>


@section('extrascript')
<script>
(function($){
  $(document).ready(function(){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
    });
  });
})(jQuery);
</script>

@endsection
