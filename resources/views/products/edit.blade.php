@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Back to List</a>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Enter name">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter description">{{ $product->description }}</textarea>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="price">Price:</label>
                                <input type="number" name="price" value="{{ $product->price }}" class="form-control" step="0.01" placeholder="Enter price">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" placeholder="Enter quantity">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="category">Category:</label>
                                <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Enter category">
                            </div>
                            
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="is_active" {{ $product->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Active</label>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection