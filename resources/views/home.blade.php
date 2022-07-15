@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')

<section >
    <h1>Treni:</h1>
    @foreach ($trains as $train)
<div class="train">
    <span>{{$train->azienda}}</span>
    <span>{{$train->stazione_di_partenza}}</span>
    <span>{{$train->stazione_di_arrivo}}</span>
    <span>{{$train->orario_di_partenza}}</span>
    <span>{{$train->orario_di_arrivo}}</span>
    <span>{{$train->codice_treno}}</span>
    <span>{{$train->numero_carrozze}}</span>
    <span>{{$train->in_orario}}</span>
    <span>{{$train->cancellato}}</span>

</div>
    @endforeach

</section>


@endsection
