@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">
                                <i class="bi bi-box-seam"></i> Lista de Produtos
                            </h2>
                            <small>Logado como: {{ Auth::user()->name }}</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="{{ route('products.create') }}" class="btn btn-success">
                                <i class="bi bi-plus-circle"></i> Criar Novo Produto
                            </a>
                            <span class="text-muted">Total: {{ $products->total() }} produtos</span>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle"></i> {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($products->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Preço</th>
                                            <th>Quantidade</th>
                                            <th>Categoria</th>
                                            <th>Status</th>
                                            <th width="280px">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td><strong>{{ $product->name }}</strong></td>
                                                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                                <td>
                                                    <span
                                                        class="badge {{ $product->quantity > 10 ? 'bg-success' : ($product->quantity > 0 ? 'bg-warning' : 'bg-danger') }}">
                                                        {{ $product->quantity }}
                                                    </span>
                                                </td>
                                                <td>{{ $product->category }}</td>
                                                <td>
                                                    <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                        {{ $product->is_active ? 'Ativo' : 'Inativo' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                        class="d-inline">
                                                        <a class="btn btn-info btn-sm"
                                                            href="{{ route('products.show', $product->id) }}" title="Visualizar">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('products.edit', $product->id) }}" title="Editar">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Tem certeza que deseja excluir este produto?')"
                                                            title="Excluir">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info text-center">
                                <i class="bi bi-info-circle"></i> Nenhum produto encontrado.
                                <a href="{{ route('products.create') }}" class="alert-link">Criar o primeiro produto</a>
                            </div>
                        @endif

                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection