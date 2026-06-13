@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4 col-lg-3 mb-2">
        <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-4 col-lg-3 mb-2">
        <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-4 col-lg-3 mb-2">
        <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
    </div>
</div>

@endsection