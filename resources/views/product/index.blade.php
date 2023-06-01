@extends('layout.main')

@section('maincontent')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h1 class="mt-4">List Products</h1>
        </div>

        <a class="btn btn-primary mb-3" href="{{ route('product.create') }}" role="button">Create New</a>

        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $products->categories->name }}</td>
                                <td>{{ $products['name'] }}</td>
                                <td>Rp. {{ number_format($products->price, 0, 2) }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
