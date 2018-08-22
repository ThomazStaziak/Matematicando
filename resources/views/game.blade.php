@extends('template.template')

@section('contents')
        <div class="row">
          <div class="col l12 center-align">
            <h5>Pergunta</h5>
            <h1 id="pergunta"></h1>
          </div>
          <div class="col l1 right-align">
            <span id="tempo"></span>
          </div>
        </div>
        <div class="row center-align">
            <div class="offset-l3 col l5 ">
              <form class="" id="form" action="index.html" method="post">
                <input type="text" class="center-align" name="numero" id="numero">
              </form>
            </div>
        </div>
        <script type="text/javascript">
        const array = <?php echo json_encode($array) ?>
      </script>
@endsection
