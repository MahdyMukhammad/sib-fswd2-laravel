@extends('layout.main')

@section('maincontent')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h1 class="mt-4">Categories</h1>
        </div>

        <a class="btn btn-primary mb-3" href="{{ route('categories.create') }}" role="button">Create New</a>

        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form onsubmit="return confirm('Are You Sure? ');"
                                        action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
