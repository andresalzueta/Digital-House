@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
      <div class="c-widget__header col-12">
          <h1 class="text-center" >
            <p class="font-weight-light">Perguntas Frequentes</p>
          </h1>
      </div>
    </div>
  </div>

  <div class="perguntas_accordion">
    <div id="accordion" style="text-align: center">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Pergunta 1
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Pergunta 2
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Pergunta 3
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- <div class="container">
<div class="col-lg-12">
<div class="userBox center-block">
  <section>
    <ul>
      <li class="lista_perguntas"><a href="#">Lorem ipsum dolor sit amet, consectetur?</a></li>
      <li class="lista_perguntas"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</a></li>
      <li class="lista_perguntas"><a href="#">Lorem ipsum, consectetur adipisicing elit?</a></li>
      <li class="lista_perguntas"><a href="#">Lorem ipsum dolor sit amet, elit?</a></li>
      <li class="lista_perguntas"><a href="#">Lorem ipsum dolor  elit?</a></li>

    </ul>
  </section>
</div> <!-- <div class="loginBox center-block">-->
<!-- </div> <!-- </div colunas>-->
<!-- </div> <!-- </div container>-->
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="c-widget__header col-12">
          <div class="text-center" >
            <a href="contato.php">Entrar em Contato</a>
            <br><br>
            <a  href="index.html">Voltar Home</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
@endsection

