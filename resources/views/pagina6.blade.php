@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 6:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina6')}}" method="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta"> <h3> <strong> Enunciado 6 </strong> </h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5>Alternativa a</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5>Alternativa b</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5>Alternativa c</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5>Alternativa d</h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/';" type="button"
                    class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>
