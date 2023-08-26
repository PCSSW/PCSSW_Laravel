@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4">Quiz - O que você sabe sobre o Super Mario?</p>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center imagem">
        <a href="#" class="img-thumbnail logo">
            <img class="img-fluid" src="{{asset('storage/imagem/logo.png')}}" />
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text-center py-4">
        <p class="texto">
            <h4>Este quiz é para saber o quanto você conhece sobre a franquia do encanador bigodudo</h4>
                <strong>SUPER MARIO BROS!</strong>
        </p>
        <div class="card-footer py-4 text-center">

                <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>

        </div>
    </div>
</div>

@endsection