@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Show Product</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Back to List</a>
                        
                        <div class="mb-3">
                            <strong>Name:</strong>
                            <p>{{ $product->name }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Description:</strong>
                            <p>{{ $product->description }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Price:</strong>
                            <p>${{ number_format($product->price, 2) }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Quantity:</strong>
                            <p>{{ $product->quantity }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Category:</strong>
                            <p>{{ $product->category }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Status:</strong>
                            <p>{{ $product->is_active ? 'Active' : 'Inactive' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection