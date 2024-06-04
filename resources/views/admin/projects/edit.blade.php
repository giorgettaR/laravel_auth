@extends('layouts.app')

@section('title','Modifica il progetto')

@section('content')

<main>
  <section>
    <div class="container">
      <h2 class="fs-2">Modifica il progetto: {{ $project->title}}</h2>
    </div>
    <div class="container">
      <form action="{{ route('admin.projects.update', $project) }}" method="POST">

        @csrf 
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title', $project->title) }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="description" rows="3" placeholder="...">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
          <label for="repository_link" class="form-label">Link GitHub</label>
          <input type="text" name="repository_link" class="form-control" id="repository_link" placeholder="..." value="{{ old('repository_link', $project->repository_link) }}">
        </div>

        <div class="mb-3">
          <label for="languages" class="form-label">Linguaggi</label>
          <input type="text" name="languages" class="form-control" id="languages" placeholder="..." value="{{ old('languages', $project->languages) }}">
        </div>

        <div class="mb-3">
          <label for="softwares" class="form-label">Softwares</label>
          <input type="text" name="softwares" class="form-control" id="softwares" placeholder="..." value="{{ old('softwares', $project->softwares) }}">
        </div>

        <div class="mb-3">
          <label for="authors" class="form-label">Autori</label>
          <input type="text" name="authors" class="form-control" id="authors" placeholder="..." value="{{ old('authors', $project->authors) }}">
        </div>

        <div class="mb-3">
          <label for="image_link" class="form-label">Link Immagine</label>
          <input type="text" name="image_link" class="form-control" id="image_link" placeholder="..." value="{{ old('image_link', $project->image_link) }}">
        </div>

        <button class="btn btn-primary">Salva Progetto</button>
      </form>
    </div>
    <div class="container">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </section>
</main>

@endsection