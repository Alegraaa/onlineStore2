@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        @if($viewData["orders"]->isEmpty())
        <div class="alert alert-info text-center">
            You have no orders yet.
            <a href="{{ route('product.index') }}">Start Shopping</a>
        </div>
        @else
        @foreach($viewData["orders"] as $order)
        <div class="card mb-3">
            <div class="card-header">
                Order #{{ $order->id }}
            </div>
            <div class="card-body">
                <p><b>Date:</b> {{ $order->created_at }}</p>
                <p><b>Total:</b> ${{ $order->total }}</p>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <a href="{{ route('product.show', $item->product_id) }}">
                                    {{ $item->product->name }} 
                                </a>
                            </td>
                            <td>${{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection