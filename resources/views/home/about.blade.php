@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h2>About the store</h2>
            <p>{{ $viewData["description"] }}</p>
        </div>
        <div class="col-md-6 col-lg-6">
            <h2>About the developer</h2>
            <p>Name: Nur Ira Lestari</p>
            <p>Email: nurira8384@gmail.com</p>
        </div>
    </div>
</div>

@endsection