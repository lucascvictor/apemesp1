<!DOCTYPE html>
<html lang="pt-br">
  <head>
    @include('partials._head')
    @yield('extrastyle')
<style type="text/css">
  .borda{

    border-radius: solid;
    box-shadow: 0px 0px 0px 16px rgba(0,0,0,0.07);
  }
</style>
  {!! Html::script('js/bootstrap-typeahead.js') !!}
</script>
  </head>

    <body style="background-color: #dbe3e9" id="app-layout">

      @include('partials._nav')

         <div  class="container-fluid" style="padding-top: 22%;">


          <div class="row">
              <div class="col-md-6 col-sm-6" style="float: right;">
               <div class="form-group input-group">
                    <input type="text" class="typeahead form-control">
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                </div>
            </div>
          </div>


          <div class="row">

            <div class="col-md-3 col-sm-2 left-column">
           
            @include('partials._sidebar')
           
            </div>

            <div class="col-md-9 col-sm-10 right-column" style=" background-color: #FFFFFF; padding: 50px;">
              @include('partials._mensagens')
              @yield('conteudo')

            </div>

           </div>
           

            @include('partials._footer')

          </div>

      @include('partials._javascript')
      @yield('extrascript')


    </body>
  

</html>
