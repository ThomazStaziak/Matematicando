@include('template.template')
<!DOCTYPE html>
<html>
 <head>
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 </head>
<body>
<div class="container">
<!-- Modal Trigger -->
{{-- <a class="btn pink darken-2 modal-trigger" href="#demo-modal">Launch Modal</a> --}}

  <!-- Modal Structure -->
  <div id="demo-modal" class="modal">
    <div class="modal-content center-align">
      <img align="center" src="{{ url($foto) }}" class="calc" alt="">
      <h4 align="center">Sua pontuação foi de: <span id="result"></span></h4>
      <h4 align="center">O Quer Fazer Agora?</h4>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col s3 left-align">
          <a href="#!" class="buttons modal-action waves-effect waves-red btn red lighten-1">Póximo nível</a>
        </div>
        <div class="col s3 left-align">
          <a href="#!" class="buttons modal-action waves-effect waves-red btn red lighten-1">testeteste</a>
        </div>
        <div class="col s3 right-align">
          <a href="#!" class="buttons modal-action waves-effect waves-red btn red lighten-1">Compartilhar</a>
        </div>
        <div class="col s3 right-align">
          <a href="{{ url('home') }}" class=" buttons modal-action waves-effect waves-red btn red lighten-1">Sair e salvar</a>
        </div>
      </div>
    </div>
  </div>
</div>
<audio id="error-song" autoplay>
    <source src="{{ url($audio) }}" type="audio/mp3" >
 </audio>
<script type="text/javascript">
	$('.modal').modal({
    dismissible: false
	});
    $(window).on('load',function(){
        $('#demo-modal').modal('open');
    });
</script>
</body>
</html>

<!-- Para fechar o modal com um trigger é só adicionar a classe modal-action em a href -->
