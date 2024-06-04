@extends('layouts.app')

@section('title','Progetti')

@section('content')

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-auto">
            <h1 class="fs-2 p-4">Titolo: {{ $project->title }}</h1>
        </div>
        <div class="col-auto ms-auto">
          <div class="d-flex gap-2">
            <a href="{{ route('admin.projects.edit',$project) }}" class="p-2">Modifica</a>
            <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-link link-danger">Elimina</button>

              </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container">
      <ul>
        <li>Link GitHub:<br><a href="{{ $project->repository_link }}">Progetto</a></li>
        <li>Linguaggi:<br>{{ $project->languages }}</li>
        <li>Softwares<br>{{ $project->softwares }}</li>
        <li>Autori<br>{{ $project->authors }}</li>
      </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          {!! $project->description !!}
        </div>
        <div class="col-8">
          <img src="{{ $project->image_link }}" alt="">
        </div>
      </div>
    </div>
  </section>
</main>

@endsection