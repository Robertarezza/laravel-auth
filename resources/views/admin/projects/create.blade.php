@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top:100px;">
  <h3>Aggiungi un nuovo Comic all'archivio</h3>

  <!-- @if ($errors->any()) 
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
        <li>
          {{$error}}
        </li>
          
        @endforeach
    </ul>
  </div>

  @endif -->


  <form action="{{ route('admin.projects.store') }}" method="POST">
    {{-- Cookie per far riconoscere il form al server --}}
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control " id="title" name="title" value="{{old('title')}}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control" id="description" name="description" rows="3"> {{old('description')}}</textarea>
    </div>


    <div class="mb-3">
      <label for="used_technologies" class="form-label">Tecnologie Usate</label>
      <input type="text" class="form-control" id="used_technologies" name="used_technologies" value="{{old('used_technologies')}}">
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Data di uscita</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
    </div>

  
    <div class="d-flex justify-content-around mt-3 mb-3 align-content-center align-items-center">
      <a href="{{route('admin.projects.index') }}" class="btn btn-outline-secondary ">Indietro</a>
      <button class="btn btn-outline-primary" type="submit">Salva</button>
    </div>
  </form>

</div>
@endsection