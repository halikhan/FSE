@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto">
            <h1 class="mb-4">Edit Hero Section</h1>

            <div class="contact__form">
                <form action="{{ route('hero-sections.update', $heroSection->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-muted">Title</label>
                            <input name="title" class="form-control @error('title') border border-danger @enderror"
                                type="text"
                                value="{{ old('title', $heroSection->title) }}"
                                placeholder="Title">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label class="text-muted">Subtitle</label>
                            <input name="subtitle" class="form-control @error('subtitle') border border-danger @enderror"
                                value="{{ old('subtitle', $heroSection->subtitle) }}"
                                placeholder="Subtitle">
                            @error('subtitle')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mt-2">
                            <label class="text-muted">Description</label>
                            <textarea name="description" class="form-control @error('description') border border-danger @enderror"
                                      placeholder="Description">{{ old('description', $heroSection->description) }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mt-2">
                            <label class="text-muted">Current Image</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $heroSection->image) }}" alt="Hero Image" width="150px">
                            </div>
                            <label class="text-muted">Change Image</label>
                            <input name="image" type="file"
                                class="form-control @error('image') border border-danger @enderror">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Social Links -->
                        <div class="col-lg-6 mt-2">
                            <label class="text-muted">Facebook Link</label>
                            <input name="facebook_link" class="form-control @error('facebook_link') border border-danger @enderror"
                                value="{{ old('facebook_link', $heroSection->facebook_link) }}"
                                placeholder="Facebook URL">
                            @error('facebook_link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-2">
                            <label class="text-muted">Twitter Link</label>
                            <input name="twitter_link" class="form-control @error('twitter_link') border border-danger @enderror"
                                value="{{ old('twitter_link', $heroSection->twitter_link) }}"
                                placeholder="Twitter URL">
                            @error('twitter_link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-2">
                            <label class="text-muted">Pinterest Link</label>
                            <input name="pinterest_link" class="form-control @error('pinterest_link') border border-danger @enderror"
                                value="{{ old('pinterest_link', $heroSection->pinterest_link) }}"
                                placeholder="Pinterest URL">
                            @error('pinterest_link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mt-2">
                            <label class="text-muted">Instagram Link</label>
                            <input name="instagram_link" class="form-control @error('instagram_link') border border-danger @enderror"
                                value="{{ old('instagram_link', $heroSection->instagram_link) }}"
                                placeholder="Instagram URL">
                            @error('instagram_link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mt-4">
                            <button class="btn-block btn-success rounded" type="submit">Update Hero Section</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
