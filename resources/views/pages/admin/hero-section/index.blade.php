@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h1 class="mb-4">Hero Sections</h1>
            <a href="{{ route('hero-sections.create') }}" class="btn btn-primary mb-3">Create Hero Section</a>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($heroSections as $index => $hero)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $hero->title }}</td>
                            <td>{{ $hero->subtitle }}</td>
                            <td>{{ Str::limit($hero->description, 50) }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}" style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <a href="{{ route('hero-sections.edit', $hero->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                
                                <form action="{{ route('hero-sections.destroy', $hero->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this hero section?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
