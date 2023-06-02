@extends('layout.main')
@section('maincontent')
    <div class="container-fluid px-4">
        <h1 class="my-4">Edit Categories</h1>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('categories.update', $categories->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $categories->name }}"
                            placeholder="Enter Your Name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
