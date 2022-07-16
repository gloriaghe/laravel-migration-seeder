@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')

<section >
    <h1>Treni:</h1>
    <div id="title" class="train">
        <span class="large">AZIENDA</span>
        <span class="large">STAZIONE DI PARTENZA</span>
        <span class="large">STAZIONE DI ARRIVO</span>
        <span class="large">ORARIO DI PARTENZA</span>
        <span class="large">ORARIO DI ARRIVO</span>
        <span  class="light">CODICE TRENO</span>
        <span class="light">N. CARROZZE</span>
        <span class="light">IN ORARIO</span>
        <span class="light">CANCELLATO</span>
    </div>
    @foreach ($trains as $train)
<div class="train">
    <span class="large">{{$train->azienda}}</span>
    <span class="large">{{$train->stazione_di_partenza}}</span>
    <span class="large">{{$train->stazione_di_arrivo}}</span>
    <span class="large">{{$train->orario_di_partenza}}</span>
    <span class="large">{{$train->orario_di_arrivo}}</span>
    <span class="light">{{$train->codice_treno}}</span>
    <span class="light">{{$train->numero_carrozze}}</span>
        @if ($train->in_orario === 1)
        <span class="light">in orario</span>
        @else
        <span class="light">in ritardo</span>
        @endif
        @if ($train->cancellato === 1)
        <span class="light">cancellato</span>
        @else
        <span class="light"> </span>
        @endif

</div>
    @endforeach

</section>


@endsection
