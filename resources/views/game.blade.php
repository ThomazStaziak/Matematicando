@extends('template.template')

@section('contents')
          <div class="row">
          <div class="col s12">
            <div class="col s6">
              <h5>Tempo</h5>
              <span id="tempo" class="timer"></span>
            </div>
            <h5>Quanto é?</h5>
            <h1 id="pergunta"></h1>
          </div>
        </div>
        <div class="row center-align">
            <div class="offset-l3 col l5 ">
              <form class="" id="form" action="index.html" method="post">
                <input type="number" class="center-align" name="numero" id="numero">
              </form>
            </div>
          </div>
        <script type="text/javascript">
          const array = <?php echo json_encode($array) ?>
        </script>
@endsection
