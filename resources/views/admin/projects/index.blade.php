@extends('layouts.app')

@section('title','Projects')

@section('content')

<main>
  <section>
    <div class="container">
      <div class="row p-4">
        <div class="col-auto">
            <h1 class="fs-2">Projects</h1>
        </div>
        <div class="col-auto ms-auto">
          <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">New Project</a>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
  <thead>
    <tr>
      <th>Titolo</th>
      <th>Descrizione</th>
      <th>Link GitHub</th>
      <th>Linguaggi</th>
      <th>Softwares</th>
      <th>Autori</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
      <tr>
        <td>{{ $project->title }}</td>
        <td>{{ $project->description }}</td>
        <td><a href="{{ $project->repository_link }}">Progetto</a></td>
        <td>{{ $project->languages }}</td>
        <td>{{ $project->softwares }}</td>
        <td>{{ $project->authors }}</td>
        <td>
          <a href="{{ route('admin.projects.show', $project ) }}" class="align-middle">
          Show details
          </a>
        </td>
        <td>
          <a href="{{ route('admin.projects.edit',$project) }}" class="align-middle">Edit</a>
        </td>
        <td>
          <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-link link-danger" class="pb-2">Elimina</button>
          </form>
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </section>
</main>
@endsection