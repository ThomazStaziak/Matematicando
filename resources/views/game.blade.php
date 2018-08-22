@extends('template.template')

@section('contents')
          <div class="container-teste">
            <div class="row">
              <div class="col s8 offset-s2">
                <div class="col s3 left-align">
                  <h5>Tempo</h5>
                  <span id="tempo" class="timer"></span>
                </div>
                <div class="col s6 center-align">
                  <h5>Quanto é?</h5>
                  <h1 id="pergunta"></h1>
                  <div class="col s2 offset-s5">
                    <form class="" id="form" action="index.html" method="post">
                      @csrf
                      <input type="hidden" name="resposta" value="$array">
                      <input type="text" class="center-align" name="numero" id="numero">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            const array = <?php echo json_encode($array) ?>
          </script>
@endsection
